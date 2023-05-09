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
            'image' => 'https://images.tokopedia.net/img/KRMmCm/2022/5/9/488c5172-8305-4d76-8519-06c7ed915ba6.jpg',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);

        ProductCategory::create([
            'code' => 'CC4BCF',
            'name' => 'Handphone',
            'description' => 'Telepon genggam atau telepon seluler (disingkat ponsel) atau handphone (disingkat HP) adalah perangkat telekomunikasi elektronik yang mempunyai kemampuan dasar yang sama dengan telepon konvensional saluran tetap, tetapi dapat dibawa ke mana-mana (bahasa Inggris: portable atau mobile) dan tidak perlu disambungkan dengan jaringan telepon menggunakan kabel (komunikasi nirkabel, bahasa Inggris: wireless communication)',
            'tag' => 'teknologi',
            'image' => 'https://asset.kompas.com/crops/8ZSNDOyqr7zKnpg8NKCMH4HsMsw=/0x0:780x520/750x500/data/photo/2021/06/30/60dc1180b8f00.jpg',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);

        ProductCategory::create([
            'code' => 'VN4JAV',
            'name' => 'Printer',
            'description' => 'Printer adalah perangkat eksternal komputer yang dapat menampilkan data komputer dalam bentuk cetakan, data tersebut bisa berupa text atau gambar yang dicetak kedalam media kertas, kain dan lain sebagainya. Bisa juga diartikan sebagai perangkat elektromekanik yang dapat mengubah data digital ( text atau gambar ) menjadi bentuk fisik.',
            'tag' => 'teknologi',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNdrPJocQG6pxcO6MuFSVF7jpOX739fQVbbA&usqp=CAU',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);
    }
}
