<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\KategoriBlog;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class BlogController extends Controller
{
    /**
     * THESE FUNCTIONS ARE ABOUT BLOG CATEGORIES
     */
    /** pages */
    function NewCategoryForm(){
        return view('dashboard.unit.blog.kategori.add');
    }
    function EditCategoryForm($id){
        $ktgr = KategoriBlog::where('id', $id)->first();
        return view('dashboard.unit.blog.kategori.edit', [
            'nama_kategori' => $ktgr->nama_kategori,
            'id' => $ktgr->id
        ]);
    }

    function listCategory(){
        $data = KategoriBlog::get();

        return view('dashboard.unit.blog.kategori.home', [
            'DaftarKategori' => $data
        ]);
    }

    /** actions */
    function PushCategory(Request $request){
        KategoriBlog::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect(route('blog.kategori.home'));
    }
    function UpdateCategory($id, Request $request){
        KategoriBlog::where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect(route('blog.kategori.home'));
    }
    function DestroyCategory($id){
        KategoriBlog::where('id', $id)->delete();
        return redirect(route('blog.kategori.home'));
    }

    /**
     * THESE FUNCTIONS ARE ABOUT BLOGS
     */

    /** pages */
    // public
    function showBlog($id){
        $dataBlog = Blog::where('id', $id)->first();

        return view('.homepage.blog.view', [
            'blog' => $dataBlog,
            'author' => Unit::where('id', $dataBlog->author)->first()->nama_unit,
            'category' => KategoriBlog::where('id', $dataBlog->kategori)->first()->nama_kategori
        ]);
    }

    function listBlog(){
        $daftarBlog = Blog::get();
        return view('dashboard.unit.blog.home',[
            'daftarBlog' => $daftarBlog
        ]);
    }

    function listBlogPerAuthor($author){
    }

    function listBlogPerCategory($category){

    }

    // admin
    function NewBlogForm(){
        $DaftarKategori = KategoriBlog::get();
        return view('.dashboard.unit.blog.write', [
            'daftarKategori' => $DaftarKategori
        ]);
    }
    function UpdateBlogForm($id){
        $DaftarKategori = KategoriBlog::get();
        $DataBlog = Blog::where('id', $id)->firstOrFail();
        return view('dashboard.unit.blog.edit', [
            'daftarKategori' => $DaftarKategori,
            'Blog' => $DataBlog,
            'id' => $id
        ]);
    }

    /** actions */
    // admin
    function PushBlog(Request $request){
        $imageFile = $request->file('blog_thumbnail');

        $imageFileName = Str::random(40).".".$imageFile->extension();
        $judulBlog = $request->judul_blog;
        $content = $request->konten;
        $author = Unit::where('user_id', Auth::user()->id)->first()->id;
        $kategori = $request->kategori;

        // first we put the file to what we want to!
        // it will goes to /images/
        $imageFile->storeAs('images', $imageFileName);

        Storage::disk('imageStorage')->put($imageFileName, $imageFile->getContent());

        // and then we store the whole thing
        Blog::create([
            'judul_blog' => $judulBlog,
            'content' => $content,
            'image_header_url' => $imageFileName,
            'author'  => $author,
            'kategori' => $kategori
        ]);

        // back to the blog list!
        return redirect(route('blog.list'));
    }

    function updateBlog($id, Request $request){
        $judulBlog = $request->judul_blog;
        $content = $request->konten;
        $kategori = $request->kategori;
        $imageFile = $request->file('blog_thumbnail');


        // and then we store the whole thing
        $blog = Blog::where('id', $id);
        $blog->update([
            'judul_blog' => $judulBlog,
            'content' => $content,
            'kategori' => $kategori
        ]);

        // change the photo if the imagefile is filled
        if($request->hasFile('blog_thumbnail')){
            if($imageFile->isValid()){
                // first remove the file
                Storage::disk('imageStorage')->delete($blog->first()->image_header_url);

                // and... we uplaad the new one
                $imageFileName = Str::random(40).".".$imageFile->extension();
                Storage::disk('imageStorage')->put($imageFileName, $imageFile->getContent());

                // and push the new name
                $blog->update([
                    'image_header_url' => $imageFileName
                ]);

                redirect(route('blog.list'));
            }
        }

        return redirect(route('blog.list'));

    }

    function DestroyBlog($id){
        $blog = Blog::where('id', $id);
        if($blog->exists()){
            Storage::disk('imageStorage')->delete($blog->first()->image_header_url);
            $blog->delete();
        }

        return redirect(route('blog.list'));
    }
}
