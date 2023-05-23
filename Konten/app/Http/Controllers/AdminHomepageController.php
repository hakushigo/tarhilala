<?php

namespace App\Http\Controllers;


use App\Models\AdminHomepage;
use Illuminate\Http\Request;

class AdminHomepageController extends Controller
{
      function ahomepage(Request $request){
        $request->validate([
            'web' => 'required',
            'judul' => 'required',
            'judul_kecil' => 'required',
            'sub_judul' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);
        $image = $request->file('gambar');
        $image_name =  hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->gambar->move(public_path('upload'),$image_name);
        $image_url = 'upload/'.$image_name;

        AdminHomepage::insert([
            'web' => $request->web,
            'judul' => $request->judul,
            'judul_kecil' => $request->judul_kecil,
            'sub_judul' => $request->sub_judul,
            'gambar' => $image_url,
            'deskripsi' => $request->deskripsi,

        ]);
        return redirect()->route('homepage')->with('message','Tambah Konten Berhasil!');
    }
    public function homepage(){
        return view('adminhomepage.ahomepage');
    }
}
