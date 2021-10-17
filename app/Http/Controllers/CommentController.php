<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function create(Request $request)
    {
    //   return $request;
      $comment = new comment();
      $comment->comment_text = $request->post('comment_text');
      $comment->comment_blog_id = $request->post('comment_blog_id');
      $comment ->comment_user_id = $request->post('comment_user_id');
      $id = Auth::user()->id;
      $user = User::find($id);
      $comment-> save();
      return redirect('/')->with('mssg', 'Your Comment was successfully Posted !',['user'=>$user]);
      }


      public function delete($id)
      {
        $blog_user_id = auth()->user()->id;
         Blog::where(['id'=>$id , 'blog_user_id'=>$blog_user_id])->delete();
         return redirect()->back();
      }

      public function update($id)
      {

        $blog_user_id = auth()->user()->id;
        $blog =  Blog::where(['id'=>$id , 'blog_user_id'=>$blog_user_id])->get();
          return view('frontend.blog_update', [
            'blog' => $blog,
          ]);
      }
      public function update_action(Request $request)
      {
        $blog_user_id = auth()->user()->id;
        $blog = Blog::find($request->id);
        $blog->blog_title =$request->blog_title;
        $blog->blog_desc =$request->blog_desc;
        $blog->blog_text_one =$request->blog_text_one;
        $blog->blog_header_1 =$request->blog_header_1;
        $blog->blog_text_1 =$request->blog_text_1;
        $blog->blog_header_2 =$request->blog_header_2;
        $blog ->blog_text_2 =$request->blog_text_2;
        $blog ->blog_user_id = $blog_user_id;
        $blog-> save();
        return redirect()->route('profile')->with('mssg', 'Blog Updated successfully !');
      }




    }

