<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = Product::first();

        $sizeAttribute = Attribute::where('name', 'Size')->first();
        $colorAttribute = Attribute::where('name', 'Color')->first();

        $sizes = AttributeValue::where('attribute_id', $sizeAttribute->id)->get();
        $colors = AttributeValue::where('attribute_id', $colorAttribute->id)->get();

        foreach ($sizes as $size) {
            foreach ($colors as $color) {
                $variation = Variation::create(['product_id' => $product->id]);
                $variation->attributes()->attach($sizeAttribute->id, ['attribute_value_id' => $size->id]);
                $variation->attributes()->attach($colorAttribute->id, ['attribute_value_id' => $color->id]);
            }
        }
    }
}
