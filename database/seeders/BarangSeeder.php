<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode' => 'BRG01',
                'nama' => 'Maybelline Fit Me Foundation',
                'harga'=> 150000,
                'deskripsi'=> 'Foundation cair dengan formula ringan.',
                'satuan_id'=> 1,
                'image_url' => 'https://images.soco.id/3ed4d4c1-6658-401d-8782-554333fe3528-.jpg'
            ],
            [
                'kode' => 'BRG02',
                'nama' => 'MAC Lipstick',
                'harga'=> 120000,
                'deskripsi'=> 'Lipstik dengan warna intens.',
                'satuan_id'=> 2,
                'image_url' => 'https://dynamic.zacdn.com/YK8ZsoGHBBoLdT-gCc55lQFDOUI=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/mac-cosmetics-8598-5946404-1.jpg'
            ],
            [
                'kode' => 'BRG03',
                'nama' => 'Chanel Coco Mademoiselle Parfum',
                'harga'=> 350000,
                'deskripsi'=> 'Parfum dengan aroma yang segar.',
                'satuan_id'=> 1,
                'image_url' => 'https://img.myshopline.com/image/store/2004129914/1674805255704/3145891166507.jpg?w=2000&h=2000'
            ],
            [
                'kode' => 'BRG04',
                'nama' => 'Pantene Pro-V Shampoo',
                'harga'=> 50000,
                'deskripsi'=> 'Shampoo untuk rambut sehat dan bersinar.',
                'satuan_id'=> 1,
                'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/MTA-133150927/pantene_pantene_pro-v_2_in_1_shampoo_-_conditioner-_daily_moisture_renewal_full01_o1t78y5p.jpg'
            ],
            [
                'kode' => 'BRG05',
                'nama' => 'Revlon ColorStay Liquid Eyeliner',
                'harga'=> 80000,
                'deskripsi'=> 'Eyeliner cair dengan daya tahan lama.',
                'satuan_id'=> 1,
                'image_url' => 'https://im.berrybenka.com/assets/upload/product/zoom/32264_revlon-colorstay-liquid-liner_black_KV5ZV.jpg'
            ],
            [
                'kode' => 'BRG06',
                'nama' => 'Garnier Bright Up Cream',
                'harga'=> 70000,
                'deskripsi'=> 'Krim wajah untuk kulit cerah dan lembut.',
                'satuan_id'=> 2,
                'image_url' => 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2023/3/23/1e9eb215-0e26-472d-bec3-7b60dd323e04.jpg'
            ],
            [
                'kode' => 'BRG07',
                'nama' => 'Loreal Voluminous Lash Paradise Mascara',
                'harga'=> 90000,
                'deskripsi'=> 'Maskara untuk bulu mata tebal dan lentik.',
                'satuan_id'=> 3,
                'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-6244984/l-oreal_paris_l-oreal_paris_voluminous_lash_paradise_waterproof_mascara_make_up_-_black_full06_ovg3rzgx.jpg'
            ],
            [
                'kode' => 'BRG08',
                'nama' => 'Essence 3D Face Sculpting Palette',
                'harga'=> 100000,
                'deskripsi'=> 'Palet untuk kontur wajah dan highlight.',
                'satuan_id'=> 3,
                'image_url' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/2/2/0283c619-50e8-482a-bbba-38cfbb9004a3.png'
            ],
            [
                'kode' => 'BRG09',
                'nama' => 'NYX Professional Makeup Concealer Jar',
                'harga'=> 75000,
                'deskripsi'=> 'Concealer untuk menyamarkan noda pada kulit.',
                'satuan_id'=> 4,
                'image_url' => 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/5/6/0/6/15606-large_default.jpg'
            ],
            [
                'kode' => 'BRG10',
                'nama' => 'Sensatia Botanicals Face Serum',
                'harga'=> 120000,
                'deskripsi'=> 'Serum wajah dengan bahan alami.',
                'satuan_id'=> 5,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIwPPYCHbedodh-fKzoSuWBB8gVE-id3zOhJ2sL6I9Ag&s'
            ],
        ]);
    }
}

