<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function homeFaq()
    {
        $faqs=Faq::all();
        return view('front.index' , ['faqs'=>$faqs]);
    }
    public function getFaqIndex()
    {
        $faqs = Faq::orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.dashboard.faqs' , ['faqs' => $faqs]);
    }

    public function postCreateFaq(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|unique:faqs',
            'body' => 'required|unique:faqs'
        ]);
        $Faq = new Faq();
        $Faq->title = $request['title'];
        $Faq->body = $request['body'];
        if($Faq->save())
        {
            return redirect()->route('admin.dashboard.faqs')->with(['success' => 'Faq Created Successfully ! ']);
        }
        return redirect()->route('admin.dashboard.faqs')->with(['success' => 'Faq Created Successfully ! ']);

    }

    public function FaqUpdate(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|max:120' ,
            'body' => 'required|max:120' ,
        ]);

        $Faq = Faq::find($request['faq_id']);
        $Faq->title = $request['title'];
        $Faq->body = $request['body'];
        $Faq->update();
        return redirect()->route('admin.dashboard.faqs')->with(['success' => 'Faq Updated Successfully ! ']);

    }

    public function getDeleteFaq(Request $request)
    {
        $Faq = Faq::find($request['faq_id']);
        if(!$Faq){
            return redirect()->route('blog.index')->with(['fail' => 'Page not found !']);
        }
        $Faq->delete();
        return redirect()->route('admin.dashboard.faqs')->with(['success' => 'Faq Deleted Successfully !']);

    }

}
