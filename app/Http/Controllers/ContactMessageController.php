<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class ContactMessageController extends Controller
{
    public function getControllerIndex()
    {
        return view('front.contact');
    }

    public function postSendMessage(Request $request)
    {
        
        $this->validate($request , [
            'email' => 'required|email',
            'sender' => 'required|max:100',
            'subject' => 'required|max:140',
            'body' => 'required|min:10'
        ]);
        $input = $request->all();
        
        $message = new ContactMessage( );
        $message->sender = $request['sender'];
        $message->email = $request['email'];
        $message->subject = $request['subject'];
        $message->body = $request['body'];
        $message->save();

        \Mail::send('front.email.index', $input, function ($message) {
            $message->from('zinnah997@gmail.com', 'Laravel');

            $message->to('anwarsandvip6@gmail.com');
        });

        return redirect()->route('contact')->with(['success' => 'Message Successfully Sent']);
    }

    

    public function getDeleteMessage(Request $request)
    {
        $contact_message = ContactMessage::find($request['message_id']);
        if(!$contact_message){
            return redirect()->route('blog.index')->with(['fail' => 'Page not found !']);
        }
        $contact_message->delete();
        return redirect()->route('admin.blog.contact')->with(['success' => 'Message Deleted Successfully !']);

    }

    public function getMessages()
    {
        $messages = ContactMessage::orderBy('created_at' , 'desc')->paginate(5);
        return view('admin.other.contact_message' , ['messages' => $messages]);
    }
}