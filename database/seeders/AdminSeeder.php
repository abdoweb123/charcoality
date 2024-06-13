<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $role_id = Role::first()->id;
        $Admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '123456',
            'password' => Hash::make('123456'),
            'country_code' => 'BH',
            'phone_code' => '973',
        ]);
        $Admin->assignRole($role_id);
    }
}
