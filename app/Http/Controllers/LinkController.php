<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Type $var = null)
    {
      $data['blogs'] = Blog::all();
      return view('frontend.links' , $data);
    }
}
