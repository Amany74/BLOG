<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Blog;
use App\Models\User;
use App\Models\comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('welcome');
    }


    public function profile()
    {
      $id = auth()->user()->id;
      $data['my_blog'] = Blog::where('blog_user_id' , $id)->get();
      return view('frontend.profile' , $data);
    }
}
