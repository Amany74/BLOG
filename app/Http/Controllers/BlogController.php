<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use App\Models\comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

   public  function welcome () {
    $blogs = Blog::all();
    return view('welcome', [
        'blogs' => $blogs,
      ]);
    }

   public function show() {

    $blogs = Blog::all();

    return view('frontend.blogs', [
      'blogs' => $blogs,
    ]);
  }
//   show blog certain user
   public function index($id) {

    $blog = Blog::find($id);
    $user = User::find($blog->blog_user_id);
    $comment = comment::where('comment_blog_id' , $id)->get();
    return view('frontend.blog', [
      'blog' => $blog,
      'comment' => $comment,
      'user' => $user,
    ]);
  }

// create new blog

public function create() {
    return view('frontend.create');
  }
  // storing new blog data to database
  public function store() {
    $user = Auth::user();
    $id = $user['id'];
    $blog = new Blog();
    $blog->blog_title = request('blog_title');
    $blog->blog_desc = request('blog_desc');
    $blog->blog_text_one = request('blog_text_one');
    $blog->blog_header_1 = request('blog_header_1');
    $blog->blog_text_1 = request('blog_text_1');
    $blog->blog_header_2 = request('blog_header_2');
    $blog ->blog_text_2 = request('blog_text_2');
    $blog ->blog_user_id = $id;
    error_log($blog);
    $blog-> save();
    return redirect('/')->with('mssg', 'Blog Created successfully !');
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
