<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['id' => '1', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/1/1620638663.jpg', 'title_ar' => 'مقبلات', 'title_en' => 'APPETIZERS', 'status' => '1', 'created_at' => '2020-09-08 14:25:10'],
            ['id' => '2', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/2/1620635605.jpg', 'title_ar' => 'لحم', 'title_en' => 'MEAT', 'status' => '1', 'created_at' => '2020-09-08 14:26:21'],
            ['id' => '3', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/3/1620638645.jpg', 'title_ar' => 'دجاج', 'title_en' => 'CHICKEN', 'status' => '1', 'created_at' => '2020-09-08 14:27:06'],
            ['id' => '4', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/4/1620638629.jpg', 'title_ar' => 'مأكولات بحريه', 'title_en' => 'SEAFOOD', 'status' => '1', 'created_at' => '2020-09-08 14:27:58'],
            ['id' => '5', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/5/1620638596.jpg', 'title_ar' => 'قسم الشواء ', 'title_en' => 'BBQ ', 'status' => '1', 'created_at' => '2020-09-08 14:28:37'],
            ['id' => '6', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/6/1634733202.jpg', 'title_ar' => 'منتجات الخضروات ', 'title_en' => 'Vegetables ', 'status' => '1', 'created_at' => '2020-09-08 14:29:00'],
            ['id' => '7', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/7/1620691605.jpg', 'title_ar' => 'برقر', 'title_en' => 'Burger', 'status' => '1', 'created_at' => '2020-09-21 11:54:21'],
            ['id' => '8', 'image' => 'https://meat-town-app.com/system/api/uploads/parent_category/8/1645362841.jpg', 'title_ar' => 'البطاطا', 'title_en' => 'Potato', 'status' => '1', 'created_at' => '2022-02-20 14:06:17'],

        ]);
    }
}
