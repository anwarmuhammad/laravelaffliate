<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function hometip()
    {
        $tips=tip::all();
        return view('front.index' , ['tips'=>$tips]);
    }
    public function gettipIndex()
    {
        $tips = tip::orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.dashboard.tips' , ['tips' => $tips]);
    }

    public function postCreatetip(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|unique:tips',
            'body' => 'required|unique:tips'
        ]);
        $tip = new tip();
        $tip->title = $request['title'];
        $tip->body = $request['body'];
        if($tip->save())
        {
            return redirect()->route('admin.dashboard.tips')->with(['success' => 'tip Created Successfully ! ']);
        }
        return redirect()->route('admin.dashboard.tips')->with(['success' => 'tip Created Successfully ! ']);

    }

    public function tipUpdate(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|max:120' ,
            'body' => 'required|max:120' ,
        ]);

        $tip = tip::find($request['tip_id']);
        $tip->title = $request['title'];
        $tip->body = $request['body'];
        $tip->update();
        return redirect()->route('admin.dashboard.tips')->with(['success' => 'tip Updated Successfully ! ']);

    }

    public function getDeletetip(Request $request)
    {
        $tip = tip::find($request['tip_id']);
        if(!$tip){
            return redirect()->route('blog.index')->with(['fail' => 'Page not found !']);
        }
        $tip->delete();
        return redirect()->route('admin.dashboard.tips')->with(['success' => 'tip Deleted Successfully !']);

    }
}
