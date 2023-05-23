<?php

namespace Database\Seeders;

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
        DB::table('homepage_config')->insert([
            ['key' => 'judul_1', 'value' => 'Lorem'],
            ['key' => 'subjudul_1', 'value' => 'Ipsum'],
            // tambahkan.... ['key' => '', 'value' => ''],
        ]);
    }
}
