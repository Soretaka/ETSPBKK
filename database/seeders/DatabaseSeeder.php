<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(3)->create();
        Pasien::create([
            'nama' => 'Anak'
        ]);
        Pasien::create([
            'nama' => 'Agung'
        ]);
        Pasien::create([
            'nama' => 'Yatestha'
        ]);
        Dokter::create([
            'nama' => 'Januar'
        ]);
        Dokter::create([
            'nama' => 'Evan'
        ]);
        Dokter::create([
            'nama' => 'Haniif'
        ]);
    }
}
