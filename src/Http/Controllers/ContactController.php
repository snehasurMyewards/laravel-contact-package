<?php

namespace CodeCaptain\Contact\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use CodeCaptain\Contact\Models\Contact;
use CodeCaptain\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){

        // $request->all();
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'message' => 'required',
        // ]);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
