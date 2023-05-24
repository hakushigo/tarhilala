<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{

    private function GetHomepageDatas(){
        return [
            'jw' => Homepage::find('judul_website')->value,
            'jh' => Homepage::find('judul_header')->value,
            'sjh' => Homepage::find('subjudul_header')->value,

            'jk1' => Homepage::find('judul_konten_1')->value,
            'sjk1' => Homepage::find('subjudul_konten_1')->value,
            'gk1' => Homepage::find('gambar_konten_1')->value,

            'jk2' => Homepage::find('judul_konten_2')->value,

            'gk2sa' => Homepage::find('gambar_konten_2_sub_a')->value,
            'jk2sa' => Homepage::find('judul_konten_2_sub_a')->value,
            'sjk2sa' => Homepage::find('subjudul_konten_2_sub_a')->value,

            'gk2sb' => Homepage::find('gambar_konten_2_sub_b')->value,
            'jk2sb' => Homepage::find('judul_konten_2_sub_b')->value,
            'sjk2sb' => Homepage::find('subjudul_konten_2_sub_b')->value,

            'gk2sc' => Homepage::find('gambar_konten_2_sub_c')->value,
            'jk2sc' => Homepage::find('judul_konten_2_sub_c')->value,
            'sjk2sc' => Homepage::find('subjudul_konten_2_sub_c')->value,

            'jdb' => Homepage::find('judul_daftar_blog')->value,

            'jbf' => Homepage::find('judul_brand_footer')->value,
            'sjbf' => Homepage::find('subjudul_brand_footer')->value,

            'pfa' => Homepage::find('profil_footer_alamat')->value,
            'pfnp' => Homepage::find('profil_footer_nophone')->value,
            'pfae' => Homepage::find('profil_footer_alamat_email')->value,
        ];
    }

    function showHomepage(){
        $homepage_data = $this->GetHomepageDatas();
        return view('.homepage.index', $homepage_data);
    }

    function ShowEditHomepage(){
        $currentHomepageData = $this->GetHomepageDatas();
       return view('.dashboard.admin.misc.updatehomepage', $currentHomepageData);
    }

    public function pushHomepageUpdate(Request $request)
    {



        // Group 1
        if ($request->input('judul_website') != "") {
            Homepage::where('id', 'judul_website')->update(['value' => $request->input('judul_website')]);
        }

        // Group 2
        if ($request->input('judul_header') != "") {
            Homepage::find('judul_header')->update(['value' => $request->input('judul_header')]);
        }
        if ($request->input('subjudul_header') != "") {
            Homepage::find('subjudul_header')->update(['value' => $request->input('subjudul_header')]);
        }

        // Group 3
        if ($request->input('judul_konten_1') != "") {
            Homepage::find('judul_konten_1')->update(['value' => $request->input('judul_konten_1')]);
        }
        if ($request->input('subjudul_konten_1') != "") {
            Homepage::find('subjudul_konten_1')->update(['value' => $request->input('subjudul_konten_1')]);
        }

        // Group 4
        if ($request->input('judul_konten_2') != "") {
            Homepage::find('judul_konten_2')->update(['value' => $request->input('judul_konten_2')]);
        }
        if ($request->input('judul_konten_2_sub_a') != "") {
            Homepage::find('judul_konten_2_sub_a')->update(['value' => $request->input('judul_konten_2_sub_a')]);
        }
        if ($request->input('subjudul_konten_2_sub_a') != "") {
            Homepage::find('subjudul_konten_2_sub_a')->update(['value' => $request->input('subjudul_konten_2_sub_a')]);
        }

        // Group 5
        if ($request->input('judul_konten_2_sub_b') != "") {
            Homepage::find('judul_konten_2_sub_b')->update(['value' => $request->input('judul_konten_2_sub_b')]);
        }
        if ($request->input('subjudul_konten_2_sub_b') != "") {
            Homepage::find('subjudul_konten_2_sub_b')->update(['value' => $request->input('subjudul_konten_2_sub_b')]);
        }

        // Group 6
        if ($request->input('judul_konten_2_sub_c') != "") {
            Homepage::find('judul_konten_2_sub_c')->update(['value' => $request->input('judul_konten_2_sub_c')]);
        }
        if ($request->input('subjudul_konten_2_sub_c') != "") {
            Homepage::find('subjudul_konten_2_sub_c')->update(['value' => $request->input('subjudul_konten_2_sub_c')]);
        }

        // Groupe 7
        if ($request->input('profil_footer_alamat') != "") {
            Homepage::find('profil_footer_alamat')->update(['value' => $request->input('profil_footer_alamat')]);
        }
        if ($request->input('profil_footer_nophone') != "") {
            Homepage::find('profil_footer_nophone')->update(['value' => $request->input('profil_footer_nophone')]);
        }
        if ($request->input('profil_footer_alamat_email') != "") {
            Homepage::find('profil_footer_alamat_email')->update(['value' => $request->input('profil_footer_alamat_email')]);
        }


        if ($request->hasFile('gambar_konten_1')) {
            // Menghapus file lama
//            Storage::delete($homepage->valuable['gambar_konten_1']);

            // Mengunggah file baru
            $gambar_konten_1 = $request->file('gambar_konten_1')->store('uploads');

//            $homepage->valuable['gambar_konten_1'] = $gambar_konten_1;
        }

        if ($request->hasFile('gambar_konten_2_sub_a')) {
            // Menghapus file lama
//            Storage::delete($homepage->valuable['gambar_konten_2_sub_a']);

            // Mengunggah file baru
            $gambar_konten_2_sub_a = $request->file('gambar_konten_2_sub_a')->store('uploads');

//            $homepage->valuable['gambar_konten_2_sub_a'] = $gambar_konten_2_sub_a;
        }

        if ($request->hasFile('gambar_konten_2_sub_b')) {
            // Menghapus file lama
//            Storage::delete($homepage->valuable['gambar_konten_2_sub_b']);

            // Mengunggah file baru
            $gambar_konten_2_sub_b = $request->file('gambar_konten_2_sub_b')->store('uploads');

//            $homepage->valuable['gambar_konten_2_sub_b'] = $gambar_konten_2_sub_b;
        }

        if ($request->hasFile('gambar_konten_2_sub_c')) {
            // Menghapus file lama
//            Storage::delete($homepage->valuable['gambar_konten_2_sub_c']);

            // Mengunggah file baru
            $gambar_konten_2_sub_c = $request->file('gambar_konten_2_sub_c')->store('uploads');

//            $homepage->valuable['gambar_konten_2_sub_c'] = $gambar_konten_2_sub_c;
        }

        return redirect(route('admin.homepage.update.form'));
    }
}
