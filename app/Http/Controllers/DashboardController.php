<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $product=Product::all();
       

        return view('home.dashboard-home')->with('product',$product) ;
    }
    public function faqs()
    {
        return view('home.FAQs');
    }
    // public function getByCategory($id=0) {
    //     $categories = Category::all();
    //     if (!$id) {
    //         $id = $categories->first()->id;
    //     }
    //     $product = DB::table('products')->where('category_id', $id)->paginate(8);
    //     return view('home.shop')
    //         ->with('product', $product)
    //         ->with('categories', $categories);
    // }
    public function getByCategory($id = 0) {
        // Fetch all categories
        $categories = Category::all();
    
        // Set default category ID if not provided
        if (!$id && $categories->count() > 0) {
            $id = $categories->first()->id;
        }
    
        // Fetch products with their ratings
        $product = Product::with('ratings') // Eager load the ratings relationship
            ->where('category_id', $id)
            ->paginate(8);
    
        // Return the view with products and categories
        return view('home.shop', [
            'product' => $product,
            'categories' => $categories
        ]);
    }
    
    public function getBySearch(Request $request) {
        // Retrieve the search keyword from the request or set to an empty string
        $keyword = $request->input('keyword', '');
    
        // Fetch all categories for the view
        $categories = Category::all();
    
        // Build the query based on whether the keyword is provided
        $query = Product::query();
    
        if (!empty($keyword)) {
            $query->where('name', 'LIKE', '%' . $keyword . '%');
        }
    
        // Paginate the results
        $products = $query->paginate(8);
    
        // Return the view with the relevant data
        return view('home.shop', [
            'product' => $products,
            'keyword' => $keyword,
            'categories' => $categories
        ]);
    }
    
    

    public function index(Request $request){
        $product=Product::all();

        $keyword = !empty($request->input('keyword'))?$request->input('keyword'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('home.dashboard-home',compact('product'))
                ->with('product', Product::where('name', 'LIKE', '%'.$keyword.'%')->paginate(8))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return view('home.dashboard-home',compact('product'))
                ->with('product', Product::paginate(8))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        }


       
    }
    public function shop(Request $request,$id=0){
        
        $product=Product::all();
        $categories = Category::all();
        $keyword = !empty($request->input('keyword'))?$request->input('keyword'):"";
        $wishlistCount = Wishlist::where('user_id', auth()->id())->count();
        

        if( $keyword != ""){
            return view('home.shop',compact('product'))
                ->with('product', Product::where('name', 'LIKE', '%'.$keyword.'%')->paginate(8))
                ->with('keyword', $keyword)
                ->with('categories', $categories)
                ->with('wishlistCount', $wishlistCount);
        }else {
            return view('home.shop',compact('product'))
                ->with('product', Product::paginate(8))
                ->with('keyword', $keyword)
                ->with('categories', $categories)
                ->with('wishlistCount', $wishlistCount);
        }
       
      

    

       
    }
    public function cart()
    {
        $wishlistCount = Wishlist::where('user_id', auth()->id())->count();

        return view('home.cart')->with('wishlistCount', $wishlistCount);
    }
    public function addToCart(string $id)
    {
        $products = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
            	"product_id"=>$products->id,
                "name" => $products->name,
                "quantity" => 1,
                "price" => $products->price,
                "image" => $products->image
            ];
        }
          
         session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
           
        }
       
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
        public function remove(Request $request)
        {
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
                
            }
       

        }
        public function cart_detail(string $id){
            $product = Product::findOrFail($id);
            return view ('home.cart_detail',compact('product'));
        }
   
        public function checkout(){
            return view('home.abapayway');
        }
        public function stripe()
{
    // checkout button click
    
    $cart = session()->get('cart');
    $totalAmount = 0;
    foreach ($cart as $item) {
        $totalAmount += $item['price'] * $item['quantity'];
    }
    return view('home.stripe')->with('total',$totalAmount);
}
public function stripePost(Request $request)
{
    $cart = session()->get('cart');

    $totalAmount = 0;
    foreach ($cart as $item) {
        $totalAmount += $item['price'] * $item['quantity'];
    }
    //======================
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    \Stripe\Charge::create ([
            "amount" => $totalAmount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Online payment"
    ]);
    //======================
    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->user_id = 1;
    $order->amount = $totalAmount;
    $order->save();
    foreach ($cart as $item) {
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $item['product_id'];
        $orderItem->quantity = $item['quantity'];
        $orderItem->amount = $item['price'];
        $orderItem->save();
    }
    session()->put('cart', []);
    return redirect()->back()->with('success', 'Payment successful!');
}
public function showProducts()
{
    $products = Product::paginate(10); // Adjust the pagination as needed
    $wishlistItems = Wishlist::where('user_id', auth()->id())->pluck('product_id')->toArray();
    return view('home.shop', compact('products', 'wishlistItems'));
}


}
