<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    //
    public function addToWishlist(Request $request)

    {
        
        $wishlist = Wishlist::firstOrCreate([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
        ]);
        if (!$wishlist->wasRecentlyCreated) {
            return back()->with('message_wishlist', 'The Product already existed in your wishlist!');
        }
        else{
        return back()->with('success', 'Product added to your wishlist!');

        }
        
        // return back()->with('success', 'Product added to your wishlist!');
    }
    public function viewWishlist()
        {
            $user = Auth::user(); 
            $wishlists = Wishlist::where('user_id', auth()->id())->with('product')->get();
            $wishlistCount = Wishlist::where('user_id', auth()->id())->count();

            return view('home.wishlist', compact('wishlists'))->with('wishlistCount', $wishlistCount);
        }
        public function moveToCart(Request $request)
        {
           
            $wishlist = Wishlist::where('user_id', auth()->id())
                                ->where('product_id', $request->product_id)
                                ->first();
            
            if ($wishlist) {
                // Add product to session cart
                
                $cart = session()->get('cart', []);
               
                $cart[$wishlist->product_id] = [
                    "product_id"=>$wishlist->product->id,
                    "name" => $wishlist->product->name,
                    "quantity" => 1,
                    "price" =>  $wishlist->product->price,
                     "image" => $wishlist->product->image
                ];
            
           
                session()->put('cart', $cart);
    
                // Remove product from wishlist
                $wishlist->delete();
    
                return back()->with('success', 'Product moved to your cart!');
            }
         
    
            return back()->with('error', 'Product not found in your wishlist.');
        }
        public function viewCart()
        {
            $cart = session()->get('cart', []);

            return view('home.cart', compact('cart'));
        }
        public function removeFromWishlist($id)
        {
            $wishlist = Wishlist::where('user_id', auth()->id())
                                ->where('id', $id)
                                ->first();
    
            if ($wishlist) {
                $wishlist->delete();
                return back()->with('success', 'Product removed from your wishlist.');
            }
    
            return back()->with('error', 'Product not found in your wishlist.');
        }
        public function index()
        {
            $wishlists = session()->get('wishlist', []); 
            return view('home.wishlist', compact('wishlists'));
        }
       
}
