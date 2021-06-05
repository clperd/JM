<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DemoProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfDemoProducts = 6;
        for ($i = 1; $i <= $numberOfDemoProducts; $i++) {
            $product = Product::query()->create([
                'name' => Lorem::word(),
                'description' => Lorem::paragraph(),
                'price' => rand(29, 99) + .99,
            ]);

            $demoImagePath = "demo/tie_{$i}.jpg";
            $destinationPath = "public/images/products/{$product->id}";

            if (!Storage::exists($destinationPath)) {
                Storage::copy($demoImagePath, $destinationPath);
            }
        }
    }
}
