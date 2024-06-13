<?php

namespace Database\Seeders;

use App\Models\ImageType;
use Illuminate\Database\Seeder;

class ImageTypeSeeder extends Seeder
{
    public function run()
    {
        ImageType::insert([
            ['id' => '1', 'title_ar' => 'سلايدر', 'title_en' => 'Slider', 'created_at' => '2022-09-11 06:33:38', 'updated_at' => '2022-09-11 06:33:38'],
        ]);
    }
}
