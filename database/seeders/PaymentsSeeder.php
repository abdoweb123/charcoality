<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\PaymentImages;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    public function run()
    {
        Payment::insert([
            ['id' => '1', 'title_ar' => 'كاش', 'title_en' => 'Cash', 'status' => '1', 'created_at' => '2022-10-06 11:56:58', 'updated_at' => '2022-10-06 11:56:58'],
            ['id' => '2', 'title_ar' => 'ديبت كارد', 'title_en' => 'Detbit Card', 'status' => '1', 'created_at' => '2022-10-06 11:57:16', 'updated_at' => '2022-10-06 12:00:04'],
            ['id' => '3', 'title_ar' => 'بطاقة الإئتمان', 'title_en' => 'Credit Card', 'status' => '1', 'created_at' => '2022-10-06 11:57:31', 'updated_at' => '2022-10-06 12:00:17'],
            ['id' => '4', 'title_ar' => 'بنفت باي', 'title_en' => 'Benefit Pay', 'status' => '1', 'created_at' => '2022-10-06 11:57:46', 'updated_at' => '2022-10-06 12:00:29'],
        ]);
        PaymentImages::insert([
            ['id' => '1', 'payment_id' => '1', 'image' => '/PaymentMethods/Cash.jpg'],
            ['id' => '2', 'payment_id' => '2', 'image' => '/PaymentMethods/Detbit.png'],
            ['id' => '3', 'payment_id' => '3', 'image' => '/PaymentMethods/Credit.png'],
            ['id' => '4', 'payment_id' => '4', 'image' => '/PaymentMethods/Benefit.png'],
        ]);
    }
}
