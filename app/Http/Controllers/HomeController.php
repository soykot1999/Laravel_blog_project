<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    //
    public function index()
    {

      $blog = Blog::where('status',1)
            ->with('category:id,category_name')
            ->take(3)
            ->get();

        return view('frontEnd.home.home',[
            'blogs'=>$blog
        ]);
    }


    public function blogDetails($slug)
    {
        return view('frontEnd.blog.blog-details',[
            'blogDetails'=>Blog::where('slug',$slug)->first()

        ]);
    }

    public function blogUserRegister()
    {
        return view('frontEnd.user.register');
    }
}
