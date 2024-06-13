<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(SettingSeeder::class);
        $this->call(RolesPermissionsSeeders::class);
        $this->call(AdminSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(CurranciessSeeder::class);

        $this->call(ImageTypeSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(WeightsSeeder::class);
        $this->call(DelivriesSeeder::class);

        $this->call(BranchSeeder::class);

    }
}
