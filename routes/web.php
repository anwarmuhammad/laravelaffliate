<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
})->name('/');

Auth::routes();

Route::get('/results',function(){

     $posts = \App\Posts::where('title','LIKE','%'.request('query').'%')->orWhere('body','LIKE','%'.request('query').'%')->get();
     $categories = \App\Category::where('name','LIKE','%'.request('query').'%')->get();
    if (count ( $posts ) > 0)
        return view('front.results',['posts' => $posts , 'categories' => $categories])->with('title','search result:'.request('query'))->with('name','search result:'.request('query'))->with('query',request('query'));
    else
        return view('front.result2')->with('No Result Found');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'PostsController@index')->name('index');
Route::get('/posts' , [
    'uses' => 'PostsController@getPosts',
    'as' => 'admin.dashboard.posts'
]);

Route::get('/create_post' , [
    'uses' => 'PostsController@getNewPost',
    'as' => 'admin.dashboard.create_post'
]);

Route::post('/create_post' , [
    'uses' => 'PostsController@postNewPost',
    'as' => 'admin.dashboard.post.create'
]);
Route::post('/show_post' , [
    'uses' => 'PostsController@show',
    'as' => 'admin.dashboard.post.show'
]);


Route::get('/edit_post/{id}' , [
    'uses' => 'PostsController@edit',
    'as' => 'admin.dashboard.edit_post'
]);

Route::get('/dashboard/post/{post_id}&{end}' , [
    'uses' => 'PostsController@getSinglePost',
    'as' => 'admin.dashboard.single'
]);

Route::post('/update_post/{id}' , [
    'uses' => 'PostsController@update',
    'as' => 'admin.dashboard.post.update'
]);

Route::get('/delete_post/{id}' , [
    'uses' => 'PostsController@delete',
    'as' => 'admin.dashboard.post.delete'
]);
Route::get('/categories' , [
    'uses' => 'CategoryController@getCategoryIndex',
    'as' => 'admin.dashboard.categories'
]);

Route::post('/dashboard/category/create' , [
    'uses' => 'CategoryController@postCreateCategory' ,
    'as' => 'admin.dashboard.category.create'
]);

Route::post('/dashboard/category/update' , [
    'uses' => 'CategoryController@categoryUpdate',
    'as' => 'admin.dashboard.category.update'
]);

Route::get('/dashboard/category/delete' , [
    'uses' => 'CategoryController@getDeleteCategory',
    'as' => 'admin.dashboard.category.delete'
]);
Route::get('/tags' , [
    'uses' => 'TagController@getTagIndex',
    'as' => 'admin.dashboard.tags'
]);

Route::post('/dashboard/tag/create' , [
    'uses' => 'TagController@postCreateTag' ,
    'as' => 'admin.dashboard.tag.create'
]);

Route::post('/dashboard/tag/update' , [
    'uses' => 'TagController@tagUpdate',
    'as' => 'admin.dashboard.tag.update'
]);

Route::get('/dashboard/tag/delete' , [
    'uses' => 'TagController@getDeleteTag',
    'as' => 'admin.dashboard.tag.delete'
]);

Route::get('/faqs' , [
    'uses' => 'FaqController@getFaqIndex',
    'as' => 'admin.dashboard.faqs'
]);

Route::post('/dashboard/faq/create' , [
    'uses' => 'FaqController@postCreateFaq' ,
    'as' => 'admin.dashboard.faq.create'
]);

Route::post('/dashboard/faq/update' , [
    'uses' => 'FaqController@faqUpdate',
    'as' => 'admin.dashboard.faq.update'
]);

Route::get('/dashboard/faq/delete' , [
    'uses' => 'FaqController@getDeleteFaq',
    'as' => 'admin.dashboard.faq.delete'
]);


Route::get('/tips' , [
    'uses' => 'TipController@getTipIndex',
    'as' => 'admin.dashboard.tips'
]);

Route::post('/dashboard/tip/create' , [
    'uses' => 'TipController@postCreateTip' ,
    'as' => 'admin.dashboard.tip.create'
]);

Route::post('/dashboard/tip/update' , [
    'uses' => 'TipController@TipUpdate',
    'as' => 'admin.dashboard.tip.update'
]);

Route::get('/dashboard/tip/delete' , [
    'uses' => 'TipController@getDeleteTip',
    'as' => 'admin.dashboard.tip.delete'
]);

Route::get('/products', 'ProductsController@index')->name('/products');
Route::get('/', 'ProductsController@homeProducts')->name('/');
//Route::get('/', 'FaqController@homeFaq')->name('/');
Route::get('/products', 'ProductsController@create');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog/{slug}', 'HomeController@blogSingle');
Route::get('/blog-category/{category_id}', 'HomeController@blogCategory');
 Route::get('/show_post', 'HomeController@adminShow');
Route::get('/about', 'HomeController@about')->name('about');
//Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/contact' , [
    'uses' => 'ContactMessageController@getControllerIndex',
    'as' => 'contact'
]);


Route::get('/contact/send/' , [
    'uses' => 'ContactMessageController@postSendMessage' ,
    'as' => 'contact.send'
]);

// Route::post('/contact/send' , [
//     'uses' => 'ContactMessageController@postSendMessage' ,
//     'as' => 'contact.send'
// ]);


