<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    public function run()
    {
        Size::insert([
            [
                'title_ar' => 'S',
                'title_en' => 'S',
                'status' => '1',
                'created_at' => '2022-01-28 11:00:54',
                'updated_at' => '2022-01-28 11:00:54',
            ],
            [
                'title_ar' => 'M',
                'title_en' => 'M',
                'status' => '1',
                'created_at' => '2022-01-28 11:01:18',
                'updated_at' => '2022-03-04 20:41:28',
            ],
            [
                'title_ar' => 'L',
                'title_en' => 'L',
                'status' => '1',
                'created_at' => '2022-03-04 20:40:45',
                'updated_at' => '2022-03-04 20:40:45',
            ],
        ]);
    }
}
