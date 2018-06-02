<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryIndex()
    {
        $categories = Category::orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.dashboard.categories' , ['categories' => $categories]);
    }

    public function postCreateCategory(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|unique:categories'
        ]);
        $category = new Category();
        $category->name = $request['name'];
        if($category->save())
        {
            return redirect()->route('admin.dashboard.categories')->with(['success' => 'Category Created Successfully ! ']);
        }
        return redirect()->route('admin.dashboard.categories')->with(['success' => 'Category Created Successfully ! ']);
     
    }

    public function categoryUpdate(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|max:120' ,
        ]);

        $category = Category::find($request['category_id']);
        $category->name = $request['name'];
        $category->update();
        return redirect()->route('admin.dashboard.categories')->with(['success' => 'Category Updated Successfully ! ']);

    }

    public function getDeleteCategory(Request $request)
    {
        $category = Category::find($request['category_id']);
        if(!$category){
            return redirect()->route('blog.index')->with(['fail' => 'Page not found !']);
        }
        $category->delete();
        return redirect()->route('admin.dashboard.categories')->with(['success' => 'Category Deleted Successfully !']);

    }


}
