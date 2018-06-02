<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Tag;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function products()
    {
        return view('front.products');
    }
    public function blog()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(6);
        $categories=Category::all();
        $tags=Tag::all();
        return view('front.blog' , ['posts' => $posts,'categories' => $categories,'tags'=>$tags]);
    }
    public function blogSingle($slug){

        $posts = Posts::where('slug',$slug)->first();
        
        return view('front.single_post' , ['posts' => $posts,'title'=>$posts->title]);

    }
    public function blogCategory($category_id){
        $posts = Posts::where('category_id',$category_id)->get();
        return view('front.category_post' , ['posts' => $posts,'category_id'=>$category_id]);

    }
    public function adminShow()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(6);
        $categories=Category::all();
        return view('admin.dashboard.show_post' , ['posts' => $posts,'categories' => $categories]);
    }
    public function about()
    {
        return view('front.about');
    }
//    public function contact()
//    {
//        return view('front.contact');
//    }
}
