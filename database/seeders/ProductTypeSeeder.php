<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductType::create([
            'code' => '3VN4WCA',
            'name' => 'Elektronik',
            'description' => 'Elektronik adalah alat yang dibuat berdasarkan prinsip elektronika serta hal atau benda yang menggunakan alat tersebut [1] dan antara lain dapat digunakan pada:Baterai dan Saklar dan Tombol Switch OFF / ON digunakan Pada Analyst System Serkuit Board Pada Suatu System IC, Resistor Pada Sistem Rangkaian Jaringan Sensor Suara pada Suatu Sinyal, System Rangkaian Hardware Dan Software Serabut Kabel AWG Konektor Electronics Digital, dan Komponen Elektronika Lamp Led.',
            'tag' => 'teknologi',
            'image' => 'https://www.static-src.com/siva/asset/03_2023/Micro-Tuktam-1200x600-Festival-Tukar-Tambah-Elektronik-1.jpg?w=1236',
            'created_at' => '2023-05-09 02:40:37',
            'updated_at' => '2023-05-09 02:40:37',
            'created_by' => 1,
        ]);
    }
}
