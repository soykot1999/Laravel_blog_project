<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageNewName,$directory,$imageUrl;

    public static function addBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->author_name = $request->author_name;
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description = $request->description;
        self::$blog->blog_type = $request->blog_type;
        self::$blog->image = self::saveImage($request);
        self::$blog->date = $request->date;
        self::$blog->status = $request->status;
        self::$blog->save();

    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'blog-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/blog/';
        self::$imageUrl= self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }
    private static function makeSlug($request){
        if($request->slug){
        $str = $request->slug;
        return preg_replace('/\s+/u','-',trim($str));
        }
        $str = $request->title;
        return preg_replace('/\s+/u','-',trim($str));

    }

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

}
