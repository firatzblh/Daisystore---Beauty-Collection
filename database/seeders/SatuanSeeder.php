<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'ml',
                'nama_satuan' => 'Mililiter',
            ],
            [
                'kode_satuan' => 'g',
                'nama_satuan' => 'Gram',
            ],
            [
                'kode_satuan' => 'pcs',
                'nama_satuan' => 'Potongan',
            ],
            [
                'kode_satuan' => 'set',
                'nama_satuan' => 'Set',
            ],
            [
                'kode_satuan' => 'ml sachet',
                'nama_satuan' => 'Mililiter Sachet',
            ],
        ]);
    }
}
