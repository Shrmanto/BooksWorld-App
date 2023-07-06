<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            'Fiksi',
            'Nonfiksi',
            'Referensi',
            'Majalah & Jurnal',
            'Agama & Spiritual',
            'Anak-anak & Remaja'
        ];

        foreach ($kategori as $jenis) {
            Kategori::create([
                'jenis_kategori' => $jenis
            ]);
        }
    }
}
