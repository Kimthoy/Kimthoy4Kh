<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mail;
use App\Models\Comment;
use App\Models\Reply_Comment;
use Illuminate\Support\Facades\Mail as MailFacades;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    //
   public function sendMail(Request $request, string $id){
            $recive_mail=Comment::findOrFail($id);
    $details=[
        'title'=>'Dear, Sr/Madam',
        'body'=>'We have been recived and confirmed for your email, please check your email and
        I will send you a message as soon as imposible.
        Please contact us :  (+855) 88 42 10 655 or telegram : @kim_thoy.
        Thank you !!!',
    ];
    MailFacades::to($recive_mail)->send(new Mail($details));
    Session::flash('recive_message','Comment has been confirmed !');

    return redirect()->back();
   }
   public function reciveMail(Request $request, string $id){
            $re_mail=Comment::findOrFail($id);
            
            return view('admin.mail.mails',compact('re_mail'));
   }

}
