<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sizes = ['S', 'M', 'L'];
        $colors = ['Red', 'Blue', 'Green', 'Yellow'];

        $sizeAttribute = Attribute::where('name', 'Size')->first();
        foreach ($sizes as $size) {
            AttributeValue::create([
                'attribute_id' => $sizeAttribute->id,
                'value' => $size,
            ]);
        }

        $colorAttribute = Attribute::where('name', 'Color')->first();
        foreach ($colors as $color) {
            AttributeValue::create([
                'attribute_id' => $colorAttribute->id,
                'value' => $color,
            ]);
        }
    }
}
