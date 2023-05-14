<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function addBlog()
    {
        return view('admin.blog.add-blog',[
            'categories'=>Category::all()
        ]);
    }

    public function saveBlog(Request $request)
    {
        Blog::addBlog($request);
        return back()->with('message','success');
    }

    public function manageBlog()
    {

        return view('admin.blog.manage-blog',[
            'blogs'=>DB::table('blogs')
                ->join('categories','blogs.category_id','categories.id')
                ->select('blogs.*','categories.category_name')
                ->get()
        ]);
    }

}
