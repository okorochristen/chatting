<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    public function comment(Request $request){

      
        $this->validate($request, [

            'comments'=> 'required|string'

        ]);

        $id=Auth::user()->id;
        $comment = new Comment([
     
        'comments'=>$request->comment,
        'user_id'=>$id,
        'post_id'=>$id

        ]);
    
        $comment->save();
        return redirect()->back(); 


    }



}
