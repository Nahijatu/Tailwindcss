<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content')->insert([
            [
                'id' => '111',
                'name' => 'Wahyu',
                'status' => 'Berhasil',
                'judul' => 'Tugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '222',
                'name' => 'William',
                'status' => 'Belum',
                'judul' => 'Entah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}