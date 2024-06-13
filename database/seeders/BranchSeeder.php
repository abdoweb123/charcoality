<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\BranchCategory;
use App\Models\BranchImage;
use App\Models\BranchRegion;
use App\Models\BranchWorktime;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run()
    {
        Branch::insert([
            ['country_id' => 1, 'title_ar' => 'فرع البحرين', 'title_en' => 'Bahraini Branch', 'phone' => '+97333405497', 'whatsapp' => '+97333405497', 'email' => 'info@emcan-group.com', 'address_ar' => 'المنامة', 'address_en' => 'Manama', 'working_time_ar' => 'من 7 صباحا الى 10 مساءا جميع ايام الاسبوع', 'working_time_en' => 'from 7 AM To 10 PM All days A Week', 'delivery' => '1', 'pickup' => '1', 'dinein' => '1', 'status' => '1', 'lat' => '26.221669056721712', 'long' => '50.58856480756184'],
        ]);
        BranchImage::insert([
            ['branch_id' => '1', 'image' => '/uploads/Branches/1665305387_9594.jpg'],
        ]);
        BranchRegion::insert([
            ['branch_id' => '1', 'region_id' => '1'],
            ['branch_id' => '1', 'region_id' => '3'],
            ['branch_id' => '1', 'region_id' => '4'],
            ['branch_id' => '1', 'region_id' => '20'],
        ]);
        BranchCategory::insert([
            ['branch_id' => '1', 'category_id' => '1'],
            ['branch_id' => '1', 'category_id' => '2'],
            ['branch_id' => '1', 'category_id' => '3'],
            ['branch_id' => '1', 'category_id' => '4'],
            ['branch_id' => '1', 'category_id' => '5'],
            ['branch_id' => '1', 'category_id' => '6'],
            ['branch_id' => '1', 'category_id' => '7'],
            ['branch_id' => '1', 'category_id' => '8'],
        ]);
        BranchWorktime::insert([
            ['branch_id' => '1', 'open' => '07:00:00', 'close' => '13:00:00'],
            ['branch_id' => '1', 'open' => '13:00:00', 'close' => '19:00:00'],
        ]);
    }
}
