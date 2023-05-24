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
        $homepage = Homepage::find(1);

        if (!$homepage) {
            $homepage = new Homepage();
            $homepage->key = 'homepage';
        }

        $homepage->valuable = [
            'judul_website' => $request->judul_website,
            'judul_header' => $request->judul_header,
            'subjudul_header' => $request->subjudul_header,
            'judul_konten_1' => $request->judul_konten_1,
            'subjudul_konten_1' => $request->subjudul_konten_1,
            'judul_konten_2' => $request->judul_konten_2,
            'judul_konten_2_sub_a' => $request->judul_konten_2_sub_a,
            'subjudul_konten_2_sub_a' => $request->subjudul_konten_2_sub_a,
            'judul_konten_2_sub_b' => $request->judul_konten_2_sub_b,
            'subjudul_konten_2_sub_b' => $request->subjudul_konten_2_sub_b,
            'judul_konten_2_sub_c' => $request->judul_konten_2_sub_c,
            'subjudul_konten_2_sub_c' => $request->subjudul_konten_2_sub_c,
            'judul_brand_footer' => $request->judul_brand_footer,
            'subjudul_brand_footer' => $request->subjudul_brand_footer,
            'profil_footer_alamat' => $request->profil_footer_alamat,
            'profil_footer_nophone' => $request->profil_footer_nophone,
            'profil_footer_alamat_email' => $request->profil_footer_alamat_email,
        ];

        if ($request->hasFile('gambar_konten_1')) {
            // Menghapus file lama
            Storage::delete($homepage->valuable['gambar_konten_1']);

            // Mengunggah file baru
            $gambar_konten_1 = $request->file('gambar_konten_1')->store('uploads');
            $homepage->valuable['gambar_konten_1'] = $gambar_konten_1;
        }

        if ($request->hasFile('gambar_konten_2_sub_a')) {
            // Menghapus file lama
            Storage::delete($homepage->valuable['gambar_konten_2_sub_a']);

            // Mengunggah file baru
            $gambar_konten_2_sub_a = $request->file('gambar_konten_2_sub_a')->store('uploads');
            $homepage->valuable['gambar_konten_2_sub_a'] = $gambar_konten_2_sub_a;
        }

        if ($request->hasFile('gambar_konten_2_sub_b')) {
            // Menghapus file lama
            Storage::delete($homepage->valuable['gambar_konten_2_sub_b']);

            // Mengunggah file baru
            $gambar_konten_2_sub_b = $request->file('gambar_konten_2_sub_b')->store('uploads');
            $homepage->valuable['gambar_konten_2_sub_b'] = $gambar_konten_2_sub_b;
        }

        if ($request->hasFile('gambar_konten_2_sub_c')) {
            // Menghapus file lama
            Storage::delete($homepage->valuable['gambar_konten_2_sub_c']);

            // Mengunggah file baru
            $gambar_konten_2_sub_c = $request->file('gambar_konten_2_sub_c')->store('uploads');
            $homepage->valuable['gambar_konten_2_sub_c'] = $gambar_konten_2_sub_c;
        }
    }
}
