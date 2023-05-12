<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use App\Models\ProductSpecification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSpecification::create([
            'product_id' => 1,
            'name' => 'Ukuran Layar',
            'value' => '34 Inch',
        ]);

        ProductSpecification::create([
            'product_id' => 1,
            'name' => 'Resolusi',
            'value' => '3440 x 1440',
        ]);
    }
}