<?php

namespace Database\Seeders;

use App\Models\Homepage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageConfigTemplateKV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::insert([
            ['id' => 'judul_website', 'value' => 'Bank Sampah Tarhilala'],
            ['id' => 'judul_header', 'value' => 'Bank Sampah Tarhilala'],
            ['id' => 'subjudul_header', 'value' => 'Membantu toba menjadi lebih bersih'],

            ['id' => 'judul_konten_1', 'value' => 'Kami menjaga danau toba'],
            ['id' => 'subjudul_konten_1', 'value' => 'Dengan membantu anda mengelola sampah anda'],
            ['id' => 'gambar_konten_1', 'value' => '2.png'],

            ['id' => 'judul_konten_2', 'value' => 'bagaimana kami bekerja?'],

            ['id' => 'gambar_konten_2_sub_a', 'value' => '3.jpg'],
            ['id' => 'judul_konten_2_sub_a', 'value' => 'Berikan'],
            ['id' => 'subjudul_konten_2_sub_a', 'value' => 'Anda memberikan sampah anda'],

            ['id' => 'gambar_konten_2_sub_b', 'value' => '4.jpg'],
            ['id' => 'judul_konten_2_sub_b', 'value' => 'Terima'],
            ['id' => 'subjudul_konten_2_sub_b', 'value' => 'Anda menerima imbalan atas sampah anda'],

            ['id' => 'gambar_konten_2_sub_c', 'value' => '5.jpg'],
            ['id' => 'judul_konten_2_sub_c', 'value' => 'Kelola'],
            ['id' => 'subjudul_konten_2_sub_c', 'value' => 'Kami mengelola sampa anda'],

            ['id' => 'judul_daftar_blog', 'value' => 'Daftar Cerita Kami'],

            ['id' => 'judul_brand_footer', 'value' => 'Tarhilala'],
            ['id' => 'subjudul_brand_footer', 'value' => 'Membantu toba menjadi lebih bersih'],

            ['id' => 'profil_footer_alamat', 'value' => 'Jl. Lintas Balige - Siantar, Desa Tambunan, Lumban Pea'],
            ['id' => 'profil_footer_nophone', 'value' => '+1 5589 55488 55'],
            ['id' => 'profil_footer_alamat_email', 'value' => 'TARHILALA@gmail.com'],

            ['id' => 'paragraf_hak_cipta', 'value' => 'Hak Cipta  Bank Sampah Tarhilala  &copy; 2023']
        ]);
    }
}
