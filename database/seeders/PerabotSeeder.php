<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perabot;

class PerabotSeeder extends Seeder
{
    public function run(): void
    {
        Perabot::create([
            'nama_perabot' => 'Meja Kayu',
            'bahan' => 'Kayu Jati',
            'ukuran' => '120x60 cm',
            'harga' => 1500000,
            'gambar' => 'meja.jpg'
        ]);

        Perabot::create([
            'nama_perabot' => 'Kursi Plastik',
            'bahan' => 'Plastik',
            'ukuran' => '40x40 cm',
            'harga' => 75000,
            'gambar' => 'kursi.jpg'
        ]);
    }
}
