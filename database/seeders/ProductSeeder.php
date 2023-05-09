<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code' => 'CCJRA3',
            'name' => 'Apple Macbook Pro M1 2020 256GB 512Gb Grey Silver 13 Inch - CPO, 256GB-GREY',
            'short_description' => 'Chip Apple M1 mendefinisikan ulang MacBook Pro 13 inci',
            'long_description' => 'Dilengkapi CPU 8-core yang mampu menangani berbagai tahapan kerja yang kompleks dalam fotografi, pemrograman, pengeditan video, dan lainnya, dengan mudah. GPU 8-core luar biasa yang melibas tugas kaya grafis dengan mudah dan membuat game terasa sangat lancar. Neural Engine 16-core yang canggih untuk tenaga lebih besar bagi pembelajaran mesin di aplikasi favorit Anda.',
            'price' => '16499000',
            'sale_price' => '15499000',
            'quantity' => 250,
            'brand' => 'Apple',
            'is_cod' => true,
            'package_height' => 20,
            'package_length' => 20,
            'package_weight' => 20,
            'package_width' => 20,
            'warranty_description' => 'Garansi 1 Tahun',
            'warranty_policy' => 'Klaim garansi hanya dapat dilakukan di official store Apple terdekat',
            'image_small' => 'https://cdn.eraspace.com/media/catalog/product/m/a/macbook_pro_m1_silver_1_2.jpg',
            'image_thumb' => 'https://cdn.eraspace.com/media/catalog/product/m/a/macbook_pro_m1_silver_1_2.jpg',
            'image_original' => 'https://cdn.eraspace.com/media/catalog/product/m/a/macbook_pro_m1_silver_1_2.jpg',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);
    }
}
