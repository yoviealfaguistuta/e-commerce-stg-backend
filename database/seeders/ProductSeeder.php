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
            'category_id' => 1,
            'type_id' => 1,
            'code' => 'CCJRA3',
            'name' => 'Apple Macbook Pro M1 2020 256GB 512Gb Grey Silver 13 Inch - CPO, 256GB-GREY',
            'short_description' => 'Chip Apple M1 mendefinisikan ulang MacBook Pro 13 inci',
            'long_description' => 'Dilengkapi CPU 8-core yang mampu menangani berbagai tahapan kerja yang kompleks dalam fotografi, pemrograman, pengeditan video, dan lainnya, dengan mudah. GPU 8-core luar biasa yang melibas tugas kaya grafis dengan mudah dan membuat game terasa sangat lancar. Neural Engine 16-core yang canggih untuk tenaga lebih besar bagi pembelajaran mesin di aplikasi favorit Anda.',
            'price' => '16499000',
            'sale_price' => '15499000',
            'sale_end_time' => '2023-06-09 02:40:37',
            'quantity' => 250,
            'brand' => 'Apple',
            'is_cod' => true,
            'package_height' => 20,
            'package_length' => 20,
            'package_weight' => 20,
            'package_width' => 20,
            'warranty_description' => 'Garansi 1 Tahun',
            'warranty_policy' => 'Klaim garansi hanya dapat dilakukan di official store Apple terdekat',
            'thumbnail' => 'https://cdn.eraspace.com/media/catalog/product/m/a/macbook_pro_m1_silver_1_2.jpg',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            'type_id' => 1,
            'code' => 'SMGA71',
            'name' => 'Samsung Galaxy A71 128GB',
            'short_description' => 'Powerful performance with long-lasting battery life',
            'long_description' => 'The Samsung Galaxy A71 comes equipped with a large 6.7-inch display and a powerful Snapdragon 730 processor for smooth performance. With its 4,500 mAh battery, you can stay connected all day without needing to charge.',
            'price' => '5999000',
            'sale_price' => '5499000',
            'sale_end_time' => '2023-06-09 02:40:37',
            'quantity' => 500,
            'brand' => 'Samsung',
            'is_cod' => true,
            'package_height' => 15,
            'package_length' => 8,
            'package_weight' => 20,
            'package_width' => 7,
            'warranty_description' => '1-year warranty',
            'warranty_policy' => 'The warranty covers defects in materials and workmanship. Visit our website for more information.',
            'thumbnail' => 'https://ae01.alicdn.com/kf/S4a3c9616457d48cc931ae42ff5e3c543V/Samsung-Galaxy-A71-A715F-Refurbish-Android-Tidak-Terkunci-Asli-Wi-Fi-64MP-6-7-128GB-6GB.jpg_Q90.jpg_.webp',
            'created_at' => '2023-05-09 09:30:00',
            'updated_at' => '2023-05-09 09:30:00',
            'created_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            'type_id' => 1,
            'code' => 'GOOPIX4A',
            'name' => 'Google Pixel 4a 128GB',
            'short_description' => 'Stunning camera and sleek design',
            'long_description' => 'The Google Pixel 4a features a 5.8-inch OLED display and a 12.2 MP camera that takes stunning photos in any lighting. With its Qualcomm Snapdragon 730 processor and 6GB of RAM, this phone offers speedy performance for all your daily tasks.',
            'price' => '3499000',
            'sale_price' => '2499000',
            'sale_end_time' => '2023-06-09 02:40:37',
            'quantity' => 250,
            'brand' => 'Google',
            'is_cod' => true,
            'package_height' => 10,
            'package_length' => 8,
            'package_weight' => 10,
            'package_width' => 5,
            'warranty_description' => '2-year warranty',
            'warranty_policy' => 'The warranty covers any defects in materials and workmanship. Visit our website for more information.',
            'thumbnail' => 'https://lzd-img-global.slatic.net/g/ff/kf/S25f856e5b81f465a895ee54c3408cf13E.jpg_720x720q80.jpg_.webp',
            'created_at' => '2023-05-09 09:35:00',
            'updated_at' => '2023-05-09 09:35:00',
            'created_by' => 1,
        ]);

        Product::create([
            'category_id' => 1,
            'type_id' => 1,
            'code' => 'LPTP012',
            'name' => 'Dell XPS 13 9310',
            'short_description' => 'Experience a 13 inch laptop crafted with diamond-cut edges and an aluminium chassis with a compact design.',
            'long_description' => 'The Dell XPS 13 9310 is packed with a 11th Gen Intel Core processor, and has a borderless, anti-reflective display. With up to 16GB LPDDR4x memory and 512GB PCIe NVMe SSD, it provides superior storage for all your needs.',
            'price' => '18299000',
            'sale_price' => '17699000',
            'sale_end_time' => '2023-06-09 02:40:37',
            'quantity' => 150,
            'brand' => 'Dell',
            'is_cod' => true,
            'package_height' => 20,
            'package_length' => 20,
            'package_weight' => 20,
            'package_width' => 20,
            'warranty_description' => 'Garansi 1 Tahun',
            'warranty_policy' => 'Klaim garansi dapat dilakukan di official store Dell terdekat',
            'thumbnail' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-12730938/dell_dell_xps_13_9310_4k_uhd_touch_i7_-1185g7__16gb_1tb_ssd_full01_hm4svx4z.jpg',
            'created_at' => '2023-05-09 03:00:00',
            'updated_at' => '2023-05-09 03:00:00',
            'created_by' => 1,
        ]);
        
        Product::create([
            'category_id' => 3,
            'type_id' => 1,
            'code' => 'PRNT0001',
            'name' => 'Canon PIXMA TR150',
            'short_description' => 'Compact wireless mobile printer that delivers great quality and convenience on the go.',
            'long_description' => 'The Canon PIXMA TR150 is designed to deliver premium quality printouts with high resolution, and it is perfect for printing documents, photos, and other materials while on the go. It is compatible with various devices, including smartphones, tablets, and laptops.',
            'price' => '2899000',
            'sale_price' => '2599000',
            'sale_end_time' => '2023-06-09 02:40:37',
            'quantity' => 100,
            'brand' => 'Canon',
            'is_cod' => true,
            'package_height' => 10,
            'package_length' => 30,
            'package_weight' => 20,
            'package_width' => 20,
            'warranty_description' => 'Garansi 1 Tahun',
            'warranty_policy' => 'Klaim garansi dapat dilakukan di official store Canon terdekat',
            'thumbnail' => 'https://id-test-11.slatic.net/p/094d723c237f890bb42280c7f0af3acd.jpg',
            'created_at' => '2023-05-09 03:05:00',
            'updated_at' => '2023-05-09 03:00:00',
            'created_by' => 1,
        ]);
    }
}
