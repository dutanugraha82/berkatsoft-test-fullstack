<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'judul' => 'Spider-Man',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus exercitationem, dolorum earum amet esse ut laudantium autem ipsum voluptate non maiores rerum ad voluptatibus atque eveniet sint ipsam alias necessitatibus!',
            'gambar' => 'blablabalbalab.jpg',
            'rating' => '4.6',
            'kategori' => 'Sci-Fi'
        ]);
    }
}
