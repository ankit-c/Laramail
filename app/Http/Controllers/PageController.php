<?php

namespace Laramail\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\ContactEmail as ContactEmail;
class PageController extends Controller
{
    public function create()
    {
      return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'msgbody' => 'required',
        ]);

    Mail::send('email.contactform', [
      'msgName' => $request->name,
      'msgEmail' => $request->email,
      'msgMobile' => $request->mobile,
      'msgMessage' => $request->msgbody,

    ], function($mail) use($request) {
      $mail->from($request->email, $request->name);

      $mail->to('ankye20@gmail.com')->subject('New Contact Info');
    });




    return redirect('/contact')->with('flash_message', 'We have recieved your details. We will get back to you shortly, Thank You');
    }
}
