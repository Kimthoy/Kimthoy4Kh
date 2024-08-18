<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Category;

class ProductController001 extends Controller
{
    //
    public function index(Request $request)
    {
        $products=Product::all();

        $keyword = !empty($request->input('keyword'))?$request->input('keyword'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('admin.product.index',compact('products'))
                ->with('products', Product::where('name', 'LIKE', '%'.$keyword.'%')->paginate(3))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return view('admin.product.index',compact('products'))
                ->with('products', Product::paginate(3))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        }
       
    }
    public function create()
    {
        $categories = array();
    	foreach (Category::all() as $category) {
    		$categories[$category->id] = $category->name;
    	}
    	return view('admin.product.create')->with('categories', $categories);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
        ]);
          
        if ($validator->fails()) {
            return redirect('product/create')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create The product
        $image = $request->file('image');
        $upload = 'img/';
        $extension = substr($image->getClientOriginalName(), -4);
        $filename = substr($image->getClientOriginalName(),0,-4).time().$extension;
        move_uploaded_file($image->getPathName(), $upload. $filename);
    
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $filename;
        $product->description = $request->description;
        $product->save();
        Session::flash('product_create','New data is created.');
        return redirect('product/create');
    }
    public function edit($id)
    {
	$categories = array();
        foreach (Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }
        $product = Product::findOrFail($id);
        return view('admin.product.edit')->with('product', $product)->with('categories', $categories);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('product/' . $id . '/edit')
                ->withInput()
                ->withErrors($validator);
        }
        $product = Product::find($id);
        // Create The Post
        if ($request->file('image') != "") {
            $image = $request->file('image');
            $upload = 'img/';
            $filename = time() . $image->getClientOriginalName();
            move_uploaded_file($image->getPathName(), $upload . $filename);
        }

        $product->name = $request->Input('name');
        $product->category_id = $request->Input('category_id');
        $product->price = $request->Input('price');
        if (isset($filename)) {
            $product->image = $filename;
        }

        $product->description = $request->Input('description');
        $product->save();

        Session::flash('product_update', 'Data is updated');
        return redirect('product/');
    }
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show')->with('product', $product);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $image_path = 'img/'.$product->image;
        File::delete($image_path);
        $product->delete();
        Session::flash('product_delete','Data is deleted.');
        return redirect('product');
    }





}
