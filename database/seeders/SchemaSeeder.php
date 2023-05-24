<?php

namespace Database\Seeders;

use App\Models\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::create([
            'nama' => 'Junior Web Developer',
            'jenis' => 'KKNI',
            'jumlah_unit' => 6,
        ]);

        Schema::create([
            'nama' => 'Digital Marketing',
            'jenis' => 'Klaster',
            'jumlah_unit' => 10,
        ]);

        Schema::create([
            'nama' => 'Multimedia Muda',
            'jenis' => 'KKNI',
            'jumlah_unit' => 10,
        ]);

        Schema::create([
            'nama' => 'Networking Administrator Muda',
            'jenis' => 'KKNI',
            'jumlah_unit' => 5,
        ]);
    }
}
