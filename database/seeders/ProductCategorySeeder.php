<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'code' => 'DCN4JFA',
            'name' => 'Laptop',
            'description' => 'Laptop atau komputer jinjing adalah komputer pribadi yang berukuran relatif kecil dan ringan sehingga sifatnya portabel.[1] Beratnya berkisar dari 1–6 kg, tergantung pada ukuran, bahan, dan spesifikasi laptop tersebut. Sumber daya laptop berasal dari baterai atau adaptor A/C yang dapat digunakan untuk mengisi ulang baterai dan menyalakan laptop itu sendiri. Baterai laptop pada umumnya dapat bertahan kurang lebih 2 hingga 6 jam sebelum akhirnya habis. Habisnya baterai bergantung dari cara pemakaian, spesifikasi, dan ukuran baterai. Laptop terkadang disebut juga dengan komputer notebook atau komputer pangku, untuk ukuran yang lebih kecil disebut sebagai netbook.',
            'tag' => 'teknologi',
            'image_small' => 'https://www.gadaibpkbmotor.com/wp-content/uploads/2022/07/Merk-Laptop-Terbaik-1024x683.jpg',
            'image_thumb' => 'https://www.gadaibpkbmotor.com/wp-content/uploads/2022/07/Merk-Laptop-Terbaik-1024x683.jpg',
            'image_original' => 'https://www.gadaibpkbmotor.com/wp-content/uploads/2022/07/Merk-Laptop-Terbaik-1024x683.jpg',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);
    }
}
