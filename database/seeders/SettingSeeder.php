<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::insert([
            [
                'key' => 'about_ar',
                'value' => '<p>Matjr</p>',
                'type' => 'about',
            ],
            [
                'key' => 'about_en',
                'value' => '<p>Matjr</p>',
                'type' => 'about',
            ],
            [
                'key' => 'about_image',
                'value' => '/uploads/settings/1664961114_8347.jpg',
                'type' => 'about',
            ],
            [
                'key' => 'privacy_ar',
                'value' => '<p>Matjr</p>',
                'type' => 'privacy',
            ],
            [
                'key' => 'privacy_en',
                'value' => '<p>Matjr</p>',
                'type' => 'privacy',
            ],
            [
                'key' => 'privacy_image',
                'value' => '',
                'type' => 'privacy',
            ],
            [
                'key' => 'address_ar',
                'value' => '<p>Matjr</p>',
                'type' => 'address',
            ],
            [
                'key' => 'address_en',
                'value' => '<p>Matjr</p>',
                'type' => 'address',
            ],
            [
                'key' => 'terms_ar',
                'value' => '<p>Matjr</p>',
                'type' => 'terms',
            ],
            [
                'key' => 'terms_en',
                'value' => '<p>Matjr</p>',
                'type' => 'terms',
            ],
            [
                'key' => 'terms_image',
                'value' => '',
                'type' => 'terms',
            ],
            [
                'key' => 'logo',
                'value' => '/logo.png',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'watermark',
                'value' => '/watermark.png',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'email',
                'value' => 'info@emcan-group.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'phone',
                'value' => '+97317001092',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'apple',
                'value' => 'https://www.apple.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'android',
                'value' => 'https://www.android.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'whatsapp',
                'value' => '+97317001092',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://www.instagram.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'twitter',
                'value' => 'https://www.twitter.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'snapchat',
                'value' => 'https://www.snapchat.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'behance',
                'value' => 'https://www.behance.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'pinterest',
                'value' => 'https://www.pinterest.com',
                'type' => 'publicSettings',
            ],
            [
                'key' => 'desc',
                'value' => '<p>Matjr</p>',
                'type' => 'meta',
            ],
            [
                'key' => 'keywords',
                'value' => '<p>Matjr</p>',
                'type' => 'meta',
            ],
            [
                'key' => 'author',
                'value' => '<p>Matjr</p>',
                'type' => 'meta',
            ],
            [
                'key' => 'discount',
                'value' => '0',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'accept_order',
                'value' => '0',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'VAT',
                'value' => '10',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'delivery_cost',
                'value' => '2',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'order_min_time',
                'value' => '120',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'order_closeing_time',
                'value' => '22:00',
                'type' => 'orderDetails',
            ],
            [
                'key' => 'DefaultCurrancy',
                'value' => '1',
                'type' => 'publicSettings',
            ],
        ]);
    }
}
