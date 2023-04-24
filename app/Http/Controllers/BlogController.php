<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class BlogController extends Controller
{
    /**
     * THESE FUNCTIONS ARE ABOUT BLOG CATEGORIES
     */
    /** pages */
    function NewCategoryForm(){

    }
    function EditCategoryForm(){

    }

    /** actions */
    function PushCategory(){

    }
    function UpdateCategory(){

    }
    function DestroyCategory(){

    }

    /**
     * THESE FUNCTIONS ARE ABOUT BLOGS
     */

    /** pages */
    // public
    function showBlog($id){

    }

    function listBlog($id){

    }

    function listBlogPerAuthor($author){

    }

    function listBlogPerCategory($category){

    }

    // admin
    function NewBlogForm(){

    }
    function UpdateBlogForm(){

    }

    /** actions */
    // admin
    function pushBlog(Request $request){
        $imageFile = $request->file('blog_thumbnail');

        $imageFileName = Str::random(40).$imageFile->extension();
        $judulBlog = $request->judul_blog;
        $content = $request->konten;
        $author = Unit::where('user_id', Auth::user()->id)->first()->id;
        $author = $request->kategori;

        // first we put the file to what we want to!
        $imageFile->storeAs('images', $imageFileName);

        Blog
    }

    function updateBlog($id){

    }

    function destroyBlog($id){

    }
}
