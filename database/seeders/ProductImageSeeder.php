<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::create([
            'product_id' => 1,
            'image' => 'https://cdn.eraspace.com/media/catalog/product/m/a/macbook_pro_m1_silver_1_2.jpg',
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'https://ae01.alicdn.com/kf/S4a3c9616457d48cc931ae42ff5e3c543V/Samsung-Galaxy-A71-A715F-Refurbish-Android-Tidak-Terkunci-Asli-Wi-Fi-64MP-6-7-128GB-6GB.jpg_Q90.jpg_.webp',
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'https://lzd-img-global.slatic.net/g/ff/kf/S25f856e5b81f465a895ee54c3408cf13E.jpg_720x720q80.jpg_.webp',
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-12730938/dell_dell_xps_13_9310_4k_uhd_touch_i7_-1185g7__16gb_1tb_ssd_full01_hm4svx4z.jpg',
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'https://id-test-11.slatic.net/p/094d723c237f890bb42280c7f0af3acd.jpg',
        ]);
    }
}
