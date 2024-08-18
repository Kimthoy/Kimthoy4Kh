<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Spatie\Html\Elements\Form;
use Illuminate\Support\Facades\Validator;

class CategoryContoller001 extends Controller
{
    //
    public function index() {
        $categories = Category::all();
        return view('admin.category.list')->with('categories', $categories);
    }
    public function create(){
        return view('admin.category.create-category');
    }
    public function store(Request $request  )
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        // Create The Category
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        Session::flash('category_create','Category is created.');
        return redirect('/category');
    }
    public function edit( string $id)
    {
        //
        
        $category = Category::find($id);
        return view('admin.category.edit-category')->with('category', $category);

    }
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
			'name' => 'required',
            'description' => 'required',
		]);
		if ($validator->fails()) {
			return redirect('category/' . $id . '/edit')
            ->withInput()
            ->withErrors($validator);
		}
		// Create The Category
		$category = Category::find($id);
		$category->name = $request->Input('name');
        $category->description = $request->Input('description');
		$category->save();
		Session::flash('category_update','Category is updated.');
		return redirect('/category');

    }
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        Session::flash('category_delete','Category is deleted.');
        return redirect('/category');

    }
    public function show(string $id)
{
    $category = Category::find($id);
    return view('admin.category.show')->with('category',$category);
}




}
