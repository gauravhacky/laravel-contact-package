<?php

namespace eightbityard\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use eightbityard\Contact\Models\Contact;
use eightbityard\Contact\Mail\ContactMail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->email,$request->subject));
        Contact::Create($request->all());
        return redirect(route('contact'));
    }
}
