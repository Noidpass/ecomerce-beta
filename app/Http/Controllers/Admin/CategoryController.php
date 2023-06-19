<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.allcategory', compact('categories'));
    }

    public function AddCategory(){
        return view('admin.category.addcategory');
    }

    public function StoreCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);
        
        Category::insert([
            'category_name'=> $request->category_name,
            'slug'=> strtolower(str_replace(' ','-', $request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfuly!');
    }

    public function EditCategory($id){
        $category_info = Category::findOrFail($id);

        return view('admin.category.editcategory', compact('category_info'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Category::findOrFail($category_id)->update([
            'category_name'=> $request->category_name,
            'slug'=> strtolower(str_replace(' ','-', $request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Updated Successfuly!');
    }

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();

        return redirect()->route('allcategory')->with('message', 'Category Deleted Successfuly!');
    }
}
