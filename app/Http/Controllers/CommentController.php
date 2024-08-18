<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CommentController extends Controller
{
    //
    public function comment(Request $request){
       
        $comment = new Comment();
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        Session::flash('message_comment','Your comment has been send!');
        return redirect()->back();
    }
    public function admin_comment(){
        $comments=Comment::all();
        
        return view('admin.comment.comments',compact('comments'));
    }
}
