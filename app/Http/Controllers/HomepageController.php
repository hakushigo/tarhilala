<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

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

    function pushHomepageUpdate(Request $request){
        /* .. tulis kode logic nya disini untuk update homepage ... */
    }
}
