<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Tag;
use Illuminate\Http\Request;
use App\Category;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function getBlogIndex($category = null)
    {
        if(!$category) {
            $categories = DB::table('categories')
                ->join('posts' , 'categories.id' , '=' , 'posts.category_id')
                ->select('categories.name')
                ->distinct()
                ->get();
            $posts = Posts::orderBy('created_at', 'desc')->paginate(6);

            foreach ($posts as $post) {
                $post->body;
            }
        } else {
            $categories = DB::table('categories')
                ->join('posts' , 'categories.id' , '=' , 'posts.category_id')
                ->select('categories.name')
                ->distinct()
                ->get();
            $category = Category::where('name' , $category)->first();
            $posts = Posts::where('category_id' , $category->id)->orderBy('created_at' , 'desc');
            foreach ($posts as $post) {
                $post->body = $this->shortenText($post->body, 30);
            }
        }
        return view('front.blog' , ['posts' => $posts , 'categories' => $categories , 'category' => $category]);
    }


    public function adminShow($category = null)
    {
        if(!$category) {
            $categories = DB::table('categories')
                ->join('posts' , 'categories.id' , '=' , 'posts.category_id')
                ->select('categories.name')
                ->distinct()
                ->get();
            $posts = Posts::orderBy('created_at', 'desc')->paginate(6);

            foreach ($posts as $post) {
                $post->body = $this->shortenText($post->body, 30);
            }
        } else {
            $categories = DB::table('categories')
                ->join('posts' , 'categories.id' , '=' , 'posts.category_id')
                ->select('categories.name')
                ->distinct()
                ->get();
            $category = Category::where('name' , $category)->first();
            $posts = Posts::where('category_id' , $category->id)->orderBy('created_at' , 'desc')->paginate(5);
            foreach ($posts as $post) {
                $post->body = $this->shortenText($post->body, 30);
            }
        }
        return view('admin.dashboard.show_post' , ['posts' => $posts , 'categories' => $categories , 'category' => $category]);
    }

    public function getSinglePost($post_id , $end = 'frontend')
    {
        $categories = DB::table('categories')
            ->join('posts' , 'categories.id' , '=' , 'posts.category_id')
            ->select('categories.name')
            ->distinct()
            ->get();
        $post = Posts::find($post_id);
        if(!$post){
            return redirect()->route('front.blog')->with(['fail' => 'Page not found !']);
        }
        return view($end . '.blog.single' , ['post' => $post , 'categories' => $categories]);
    }

    public function getPosts()
    {
        $posts = Posts::orderBy('created_at' , 'desc')->paginate(5);
        return view('admin.dashboard.posts' , ['posts' => $posts]);
    }

    public function getNewPost()
    {
        $categories = Category::all();
        // $tags=Tag::all();
        return view('admin.dashboard.create_post' , ['categories' => $categories]);
    }

    public function postNewPost(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|max:120| unique:posts' ,
            'author' => 'required|max:80' ,
            'body' => 'required',
            'product_title' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'button_link' => 'required',
            'image'=>'max:500000',
        ]);
        $input = $request->all();
        if($request->hasFile('images')){
            $photo      = $request->file('images');
            $fileType   = substr($_FILES['images']['type'], 6);
            $fileName   = rand(1,1000).date('dmyhis').".".$fileType;
            $upload     = $photo->move('images/posts'.'/',$fileName);
            $input['images'] = $fileName;
        }

        $post = new Posts();
        $post->title = $request['title'];
        $post->button_link = $request['button_link'];
        $post->slug = str_slug($request['title']);
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->product_title = $request['product_title'];
        $post->product_description = $request['product_description'];
        $post->product_price = $request['product_price'];
        $post->image = $input['images'];

        $categoryID = $request['category'];
        $category = Category::find($categoryID);
        $category->posts()->save($post);

        // $tagID = $request['tag'];
        // $tag = Tag::find($tagID);
        // $tag->posts()->save($post);


        return redirect()->back()->with(['success' => 'Post Successfully Created !']);
    }

    public function shortenText($text , $words_count)
    {
        if(str_word_count($text , 0) > $words_count)
        {
            $words = str_word_count($text , 2);
            $pos = array_keys($words);
            $text = substr($text , 0 , $pos[$words_count]) . '.....' ;
        }
        return $text;
    }

    public function edit($id)
    {
        $post = Posts::find($id);
        $categories = Category::all();
        return view('admin.dashboard.edit_post' , ['post' => $post , 'categories' => $categories]);
    }

    public function update(Request $request,$id)
    {
        $post = Posts::find($id);
        $this->validate($request , [
            'title' => 'required|max:120' ,
            'author' => 'required|max:80' ,
            'body' => 'required',
            'product_title' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'button_link' => 'required'
//            'category_id' => 'required'
        ]);
        $input = $request->all();

        if($request->hasFile('images')){
            $photo      = $request->file('images');
            $fileType   = substr($_FILES['images']['type'], 6);
            $fileName   = rand(1,1000).date('dmyhis').".".$fileType;
            $upload     = $photo->move('images/posts'.'/',$fileName);
            $input['image'] = $fileName;
            $imagePath = "images/posts/$post->image";
            if($post['image'] != null && file_exists($imagePath)){
                unlink($imagePath);
            }

        }else{
            $input['image'] = $post['image'];
        }


        $post->title = $request['title'];
        $post->button_link = $request['button_link'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->product_title = $request['product_title'];
        $post->product_description = $request['product_description'];
        $post->product_price = $request['product_price'];
        $post->category_id = $request['category_id'];
        $post->image = $input['image'];
        $post->update();
        return redirect()->back()->with(['success' => 'Post Successfully Updated !']);

    }

    public function delete($id)
    {
        $post = Posts::find($id);
        if(!$post){
            return redirect()->route('dashboard.index')->with(['fail' => 'Page not found !']);
        }
        $post->delete();
        return redirect()->back()->with(['success' => 'Post Deleted Successfully !']);
    }

    public function show($post_id)
    {
        $post= Posts::orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.dashboard.show_post');
    }

}
