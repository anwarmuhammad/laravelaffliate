<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getTagIndex()
    {
        $tags = Tag::orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.dashboard.tags' , ['tags' => $tags]);
    }

    public function postCreateTag(Request $request)
    {
        $this->validate($request , [
            'tag' => 'required|unique:tags'
        ]);
        $tag = new Tag();
        $tag->tag = $request['tag'];
        if($tag->save())
        {
            return redirect()->route('admin.dashboard.tags')->with(['success' => 'Tag Created Successfully ! ']);
        }
        return redirect()->route('admin.dashboard.tags')->with(['success' => 'Tag Created Successfully ! ']);
    }

    public function TagUpdate(Request $request)
    {
        $this->validate($request , [
            'tag' => 'required|max:120' ,
        ]);

        $tag = Tag::find($request['tag_id']);
        $tag->tag = $request['tag'];
        $tag->update();
        return redirect()->route('admin.dashboard.tags')->with(['success' => 'Tag Updated Successfully ! ']);

    }

    public function getDeleteTag(Request $request)
    {
        $tag = Tag::find($request['tag_id']);
        if(!$tag){
            return redirect()->route('blog.index')->with(['fail' => 'Page not found !']);
        }
        $tag->delete();
        return redirect()->route('admin.dashboard.tags')->with(['success' => 'Tag Deleted Successfully !']);

    }


}
