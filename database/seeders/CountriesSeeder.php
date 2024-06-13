<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        Country::insert([
            [
                'title_ar' => 'البحرين',
                'title_en' => 'Bahrain',
                'country_code' => 'BH',
                'phone_code' => '973',
                'lat' => '25.93041400',
                'long' => '50.63777200',
                'image' => '/countries/Bahrain.png',
            ],
            [
                'title_ar' => 'المملكة العربية السعودية',
                'title_en' => 'Saudi Arabia',
                'country_code' => 'SA',
                'phone_code' => '966',
                'lat' => '23.88594200',
                'long' => '45.07916200',
                'image' => '/countries/SaudiArabia.png',
            ],
            [
                'title_ar' => 'سلطنة عمان',
                'title_en' => 'Oman',
                'country_code' => 'OM',
                'phone_code' => '968',
                'lat' => '21.51258300',
                'long' => '55.92325500',
                'image' => '/countries/Oman.png',
            ],
            [
                'title_ar' => 'الإمارات العربية المتحدة',
                'title_en' => 'United Arab Emirates',
                'country_code' => 'AE',
                'phone_code' => '971',
                'lat' => '23.42407600',
                'long' => '53.84781800',
                'image' => '/countries/UnitedArabEmirates.png',
            ],
            [
                'title_ar' => 'قطر',
                'title_en' => 'Qatar',
                'country_code' => 'QA',
                'phone_code' => '974',
                'lat' => '25.35482600',
                'long' => '51.18388400',
                'image' => '/countries/Kuwait.png',
            ],
            [
                'title_ar' => 'الكويت',
                'title_en' => 'Kuwait',
                'country_code' => 'KW',
                'phone_code' => '965',
                'lat' => '29.31166000',
                'long' => '47.48176600',
                'image' => '/countries/Kuwait.png',
            ],
            [
                'title_ar' => 'مصر',
                'title_en' => 'Egypt',
                'country_code' => 'EG',
                'phone_code' => '20',
                'lat' => '26.82055300',
                'long' => '30.80249800',
                'image' => '/countries/Egypt.png'],
        ]);

        $Regions = [
            [
                'country_id' => 1,
                'title_ar' => 'العكر',
                'title_en' => ' Al Eker',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'القدم',
                'title_en' => 'Al Qadam',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'القرية',
                'title_en' => 'Al Quriah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'القضيبية',
                'title_en' => 'Qudaibiya',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'قلالي',
                'title_en' => 'Qalali',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'القلعة',
                'title_en' => 'Al Qalah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'كرانة',
                'title_en' => 'Karranah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الحجر',
                'title_en' => 'Al Hajar',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'كرباباد',
                'title_en' => 'Karbabad',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'كرزكان',
                'title_en' => 'Karzakan',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الماحوز',
                'title_en' => 'Mahooz',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المالكية',
                'title_en' => 'Malkiah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مدينة حمد من دوار 1 إلى دوار 10',
                'title_en' => 'Madinat Hamad From R 1 to R 10',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مدينة زايد',
                'title_en' => 'Zayed Town',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مدينة عيسي',
                'title_en' => 'Isa Town',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المحرق',
                'title_en' => 'Al Muharraq',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مقابة',
                'title_en' => 'Maqabah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المقشع',
                'title_en' => 'Al Maqsha',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المنامة',
                'title_en' => 'Manama',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'النبيه صالح',
                'title_en' => 'Nabih Saleh',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'النعيم',
                'title_en' => 'Alnaim',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'النويدرات',
                'title_en' => 'Nuwaidrat',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الهملة',
                'title_en' => 'Al Hamala',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'البلاد القديم',
                'title_en' => 'Bilad Al Qadeem',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الكورة',
                'title_en' => 'Kawarah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'سلماباد',
                'title_en' => 'Salmabad',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'أبو صيبع',
                'title_en' => 'Abu Saiba',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'أبوقوة',
                'title_en' => 'Bu Quwah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'أم الحصم',
                'title_en' => 'Umm Al Hassam',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المصلي',
                'title_en' => 'Al Musalla',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'توبلي',
                'title_en' => 'Tubli',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'باربار',
                'title_en' => 'Barbar',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'البديع',
                'title_en' => 'Budaiya',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'البسيتين',
                'title_en' => 'Busaiten',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'بوكوارة',
                'title_en' => 'Bu Kowarah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'البحير',
                'title_en' => 'Al Bahair',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'بني جمرة',
                'title_en' => 'Bani Jamra',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'بوري',
                'title_en' => 'Buri',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جبلة حبشي',
                'title_en' => 'Jeblat Hebshi',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جد الحاج',
                'title_en' => 'Jid Al Haj',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جد حفص',
                'title_en' => 'Jidhafs',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جد علي',
                'title_en' => 'Jid Ali',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جرداب',
                'title_en' => 'Jurdab',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الجسرة',
                'title_en' => 'Aljasrah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الجفير',
                'title_en' => 'AlJuffair',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الجنبية',
                'title_en' => 'ُEljanabiya',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جنوسان',
                'title_en' => 'Jannusan',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جو',
                'title_en' => 'Jaw',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الحد',
                'title_en' => 'AL Hidd',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الحجيات',
                'title_en' => 'Alhajiyat',
            ],
            [
                'country_id' => 1,
                'title_ar' => '.درة البحرين',
                'title_en' => 'DURT ALBAHRAIN.',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الحورة',
                'title_en' => 'Al Hoora',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الخميس',
                'title_en' => 'Khamis',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'دار كليب',
                'title_en' => 'Dar Kulaib',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المنطقة الدبلوماسية',
                'title_en' => 'Diplomatic Area',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الدراز',
                'title_en' => 'Diraz',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'دمستان',
                'title_en' => 'Dimstan',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الدير',
                'title_en' => 'Aldair',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الدية',
                'title_en' => 'Daih',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'رأس رمان',
                'title_en' => 'Ras Rumman',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الرفاع(الشرقي)',
                'title_en' => 'East Riffa',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الرفاع(الغربي)',
                'title_en' => 'West Riffa',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الزلاق',
                'title_en' => 'Al zallaq',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الزنج',
                'title_en' => 'Zinj',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'السقيه',
                'title_en' => 'AL SAGYAH',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'سار',
                'title_en' => 'Saar',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'سترة',
                'title_en' => 'sitra',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'سماهيج',
                'title_en' => 'Samahej',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'السنابس',
                'title_en' => 'Sanabis',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'سند',
                'title_en' => 'Sanad',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'السهلة(الشمالية والجنوبية)',
                'title_en' => 'Sehla',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'ضاحية السيف',
                'title_en' => 'seef',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الشاخورة',
                'title_en' => 'Shakhurah',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'شهركان',
                'title_en' => 'Sharakan',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'جامعة البحرين ',
                'title_en' => 'univrsty of bahrain',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الصالحيه',
                'title_en' => 'Salihiya',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'صدد',
                'title_en' => 'Sadad',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'عالي',
                'title_en' => 'Aali',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'العدلية',
                'title_en' => 'Adliya',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'عذاري',
                'title_en' => 'Adhari',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'عراد',
                'title_en' => 'Arad',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'عسكر',
                'title_en' => 'askr',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مدينة حمد من دوار 11 إلى دوار 22',
                'title_en' => 'Madinat Hamad From R 11 to R 22',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'اللوزي',
                'title_en' => 'Al lozy',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'مدينة سلمان',
                'title_en' => 'Salman City',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'امواج',
                'title_en' => 'Amwaj',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المرخ',
                'title_en' => 'Al-Markh',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'المعامير',
                'title_en' => 'ma\'ameer',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'غرب ابو فطيره الحرفيه',
                'title_en' => 'West Abu Ftirah Hirafyia',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القصور',
                'title_en' => 'Al-Qusour',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القرين',
                'title_en' => 'Al-Qurain',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الوسطى',
                'title_en' => 'Wista',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العدان',
                'title_en' => 'Al-Adan',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الفنيطيس',
                'title_en' => 'Al-Fnaitees',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ابو فطيرة',
                'title_en' => 'Abu Ftaira',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الظهر',
                'title_en' => 'Dhaher',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مبارك الكبير',
                'title_en' => 'mubarak Al-kabeer',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جابر العلي',
                'title_en' => 'Jaber Al-Ali',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المسيلة',
                'title_en' => 'Messila',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صبحان الصناعية',
                'title_en' => 'Subhan Industrial',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح السالم',
                'title_en' => 'Subah Al-Salem',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العقيلة',
                'title_en' => 'Egaila',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المسايل',
                'title_en' => 'Al Masayel',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الرقة',
                'title_en' => 'Riqqa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'هدية',
                'title_en' => 'Hadiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الفنطاس',
                'title_en' => 'Al-Fintas',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ابو حصانية',
                'title_en' => 'Abu Hassaniah',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'منطقة الوزارات',
                'title_en' => 'Ministries Area',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشهداء',
                'title_en' => 'Shuhada',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مشرف',
                'title_en' => 'Mishrif',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مبارك العبدالله',
                'title_en' => 'Mubarak Al-Abdullah',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'فهد الاحمد',
                'title_en' => 'Fahad Al-Ahmad',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المباركية',
                'title_en' => 'mubarakyia',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الحطين',
                'title_en' => 'Hitteen',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الزهراء',
                'title_en' => 'Zahra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'بيان',
                'title_en' => 'Bayan',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'سلوى',
                'title_en' => 'Salwa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصباحية',
                'title_en' => 'Subahiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المهبولة',
                'title_en' => 'Mahboula',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'انجفة',
                'title_en' => 'Anjafa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'السرة',
                'title_en' => 'Surra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الضجيج',
                'title_en' => 'Dajeej',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'سلام',
                'title_en' => 'Salam',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المطار الدولي',
                'title_en' => 'International Airport',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الخيطان',
                'title_en' => 'Khaitan',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصديق',
                'title_en' => 'Al-Siddiq',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'وسط الاحمدي',
                'title_en' => 'Middle of Ahmadi',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'قرطبة',
                'title_en' => 'Qurtuba',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'البيداء',
                'title_en' => 'Al Bida\'a',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوب الصباحية',
                'title_en' => 'South Sabahiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الجابرية',
                'title_en' => 'Jabriya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شمال الاحمدي',
                'title_en' => 'North Ahmadi',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الفروانية',
                'title_en' => 'Farwaniya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'حولي',
                'title_en' => 'Hawalli',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'النزهة',
                'title_en' => 'Nuzha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الروضة',
                'title_en' => 'Rawda',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شرق الاحمدي',
                'title_en' => 'East Ahmadi',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ابو حليفة',
                'title_en' => 'Abu Halifa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوب الاحمدي',
                'title_en' => 'South Ahmadi',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القادسية',
                'title_en' => 'Qadsiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الرميثية',
                'title_en' => 'Rumaithiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المنقف',
                'title_en' => 'Mangaf',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'اشبيلية',
                'title_en' => 'Ashbeliah',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'فحيحيل',
                'title_en' => 'Fahaheel',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جليب الشيوخ',
                'title_en' => 'Jleeb Al-shiyoukh',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المنصورية',
                'title_en' => 'Mansouriya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'اليرموك',
                'title_en' => 'Yarmouk',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الفيحاء',
                'title_en' => 'Faiha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العديلية',
                'title_en' => 'Adailiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'السالمية',
                'title_en' => 'Salmiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'رحاب',
                'title_en' => 'Rehab',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'عبدالله السالم',
                'title_en' => 'Abdulla Al-Salem',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الخالدية',
                'title_en' => 'Khaldiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مرقاب',
                'title_en' => 'Mirqab',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'حدائق السور',
                'title_en' => 'Al Sour Gardens',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الدعية',
                'title_en' => 'Daiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مصفاة ميناء الاحمدي',
                'title_en' => 'Mina Al-Ahmadi Refinery',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'عبدالله مبارك الصباح',
                'title_en' => 'Abdulla Mubarak Al-Subah',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الري',
                'title_en' => 'Rai',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الرابية',
                'title_en' => 'Rabiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'كيفان',
                'title_en' => 'Kifan',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشويخ الصناعية - 2',
                'title_en' => 'Shuwaikh Industrial -2',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العميرية',
                'title_en' => 'Omariya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشعب',
                'title_en' => 'Shaab',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الدسمة',
                'title_en' => 'Dasma',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'عارضية 4',
                'title_en' => 'Ardhiya 4',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشامية',
                'title_en' => 'Shamiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'وجهة البحر',
                'title_en' => 'The Sea Front',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'دسمان',
                'title_en' => 'Dasman',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مغوى',
                'title_en' => 'Magwa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'بنيد القار',
                'title_en' => 'Bnaid Al-qar',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشويخ الصناعية - 3',
                'title_en' => 'Shuwaikh Industrial - 3',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'عارضية 6',
                'title_en' => 'Ardhiya 6',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الرقعي',
                'title_en' => 'Riggai',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشويخ',
                'title_en' => 'Shuwaikh',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العارضية الحرفية',
                'title_en' => 'Ardhiya Herafiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القبلة',
                'title_en' => 'Qibla',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العارضية',
                'title_en' => 'Ardhiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الناصر',
                'title_en' => 'Subah Al-Nasser',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شرق',
                'title_en' => 'Sharq',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المباركية كامبس',
                'title_en' => 'Mubarakiya camps',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشعيبة الصناعية',
                'title_en' => 'shuaiba industrial easterly',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوب عبدالله المبارك',
                'title_en' => 'South Abdullah Al-Mubarak',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشعيبة الصناعية الغربية',
                'title_en' => 'shuaiba industrial western',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ميناء عبدالله',
                'title_en' => 'Mina Abdulla',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح السالم - مدينة الجامعة',
                'title_en' => 'Subah Al-Salem University City',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'فردوس',
                'title_en' => 'Ferdous',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'اندلس',
                'title_en' => 'Andalus',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ميناء الشويخ',
                'title_en' => 'Shuwaikh port',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ميناء عبدالله ريفنري',
                'title_en' => 'Mina Abdulla Refinery',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'منطقة الصحة',
                'title_en' => 'Health Area',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'غرناطة',
                'title_en' => 'Ghornata',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ناهدة',
                'title_en' => 'Nahda',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صليبية الصناعية - 1',
                'title_en' => 'Sulaiybia Industrial -1',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصليبية',
                'title_en' => 'Sulaiybia',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صليبية الصناعية - 3',
                'title_en' => 'Sulaiybia Industrial - 3',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات ميناء عبدالله',
                'title_en' => 'Shalehat Mina Abdulla',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الشويخ الصناعية -1',
                'title_en' => 'Shuwaikh Industrial -1',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصليبخات',
                'title_en' => 'Sulaibikhat',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصليبية الصناعية  1',
                'title_en' => 'Sulaiybia Industrial 1',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'غرب عبدالله المبارك',
                'title_en' => 'West Abdullah Al-Mubarak',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'راجم خشمان',
                'title_en' => 'Rajim Khashman',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'علي صباح السالم',
                'title_en' => 'Ali Subah Al-Salem',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صليبخات',
                'title_en' => 'Sulaibkhat Cemetry',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القريوان',
                'title_en' => 'Kaerawan',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صليبخات الشمالية الغربية',
                'title_en' => 'Sorthwest Sulaibkhat',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات ضبيعية',
                'title_en' => 'Shalehat Dba\'ayed',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'دوحة',
                'title_en' => 'Doha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'كبد الزراعية',
                'title_en' => 'Kabd Agriculture',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صليبية الزراعية',
                'title_en' => 'Sulaibiya Agriculture',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'مدينة سعد العبدالله',
                'title_en' => 'Saad Al-Abdulla City',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوب امغرة',
                'title_en' => 'South Amghara',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'ميناء الدوحة',
                'title_en' => 'Mina Doha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'امغرة الصناعية',
                'title_en' => 'Amghara Industrial',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جابر الاحمد',
                'title_en' => 'Jaber Al-Ahmed',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات الدوحة',
                'title_en' => 'Shalehat Doha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'نسيم',
                'title_en' => 'Nasseem',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'تايما',
                'title_en' => 'Taima',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات الجليع',
                'title_en' => 'Salehat Jlea\'a',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جواخر الجهراء',
                'title_en' => 'Jawakher Al Jahra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الجهراء كامبس',
                'title_en' => 'Jahra Camps',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'نعيم',
                'title_en' => 'Naeem',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الجهراء الصناعية',
                'title_en' => 'Jahra Industrial',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العيون',
                'title_en' => 'Oyoun',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الجهراء',
                'title_en' => 'Jahra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'القصر',
                'title_en' => 'Qaser',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الاحمد 3',
                'title_en' => 'Subah Al-Ahmed',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الأحمد 2',
                'title_en' => 'Subah Al-Ahmed 2',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'واحة',
                'title_en' => 'Waha',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الجهراء الشمالية الغربية',
                'title_en' => 'North West Jahra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الاحمد 1',
                'title_en' => 'Sabah Al-Ahmed 1',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'خدمات صباح الاحمد',
                'title_en' => 'Subah Al-Ahmed Services',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الاحمد 6',
                'title_en' => 'Subah Al-Ahmed 6',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الأحمد 4',
                'title_en' => 'Subah Al-Ahmed 4',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'محافظة الاحمدي',
                'title_en' => 'Ahmedi Governorate Desert',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'كبد',
                'title_en' => 'kabd',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات البندر',
                'title_en' => 'Shalehat Bneder',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الاحمد 5',
                'title_en' => 'Subah Al-Ahmed 5',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'صباح الاحمد الاستثمارية',
                'title_en' => 'Sabah Al-Ahmad Investment',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوبية الجواخير',
                'title_en' => 'Janobiya Aljawakheer',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'جنوب المطلاع',
                'title_en' => 'South Mutlaa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الزور',
                'title_en' => 'Zoor',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الخيران',
                'title_en' => 'Khiran City',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الصبية',
                'title_en' => 'Subiya',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'المطلاع',
                'title_en' => 'Al Mutlaa',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الوفرة الجديدة',
                'title_en' => 'New Wafra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات كاظمة',
                'title_en' => 'Shalehat Kazima',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات الاحمد المرين',
                'title_en' => 'Shalehat Al-Ahmed Al-Marine',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الوفرة',
                'title_en' => 'Wafra',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات زور',
                'title_en' => 'Shalehat Zoor',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'كاظمة',
                'title_en' => 'Kazima',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الوفرة الزراعية',
                'title_en' => 'Wafra Farms',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات الخيران',
                'title_en' => 'Shalehat Al-Khiran',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'النويصيب',
                'title_en' => 'Al-Nuwiseeb',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'شاليهات النويصيب',
                'title_en' => 'Shalehat Al-Nuwaiseeb',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'الروضتين',
                'title_en' => 'Rawdatain',
            ],
            [
                'country_id' => 4,
                'title_ar' => 'العبدلي',
                'title_en' => 'Abdally',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'المعابيلاه',
                'title_en' => 'Al Maabilah',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'شمال الموالح',
                'title_en' => 'Al Mawaleh North',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'جنوب الموالح',
                'title_en' => 'Al Mawaleh South',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الموج',
                'title_en' => 'Al Mouj',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'بوشر',
                'title_en' => 'Bosher',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'روي',
                'title_en' => 'Ruwi',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'دارسيت',
                'title_en' => 'Dursait',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'جهالا',
                'title_en' => 'Ghala',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'مطرح',
                'title_en' => 'Muttrah',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'مدينة السلطان قابوس',
                'title_en' => 'Madinat As Sultan Quboos',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'وادي الكبير',
                'title_en' => 'Wadi Al Kabir',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'بر الجيساه',
                'title_en' => 'Barr Al Jissah',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'القنطاب',
                'title_en' => 'Qantab',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'سداب',
                'title_en' => 'Sidab',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'القريات',
                'title_en' => 'Quriyat',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'جنوب الانصب',
                'title_en' => 'Ansab South',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'شمال الانصب',
                'title_en' => 'Ansab North',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'جنوب الهيل',
                'title_en' => 'Al Hail South',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'شمال الهيل',
                'title_en' => 'Al Hail North',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الخود',
                'title_en' => 'Al Khoud',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الخوير',
                'title_en' => 'Al Khuwair',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الرسيل',
                'title_en' => 'Rusail',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'السيب',
                'title_en' => 'Seeb',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'العامرا ت',
                'title_en' => 'Amerat',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الغبرة الشمالية',
                'title_en' => 'Ghubrah North',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'الغبره الجنوبيه',
                'title_en' => 'Ghubrah South',
            ],
            [
                'country_id' => 3,
                'title_ar' => 'القرم',
                'title_en' => 'Qurum',
            ],
            [
                'country_id' => 1,
                'title_ar' => 'الاسكندرية',
                'title_en' => 'Alexandria',
                'lat' => '31.182276502328243',
                'long' => '29.89650665137978',
            ],
            [
                'country_id' => 7,
                'title_ar' => 'القاهرة',
                'title_en' => 'Cairo',
                'lat' => '30.017038396895398',
                'long' => '31.220162073069375'],
        ];

        foreach ($Regions as $key => $Region) {
            Region::create($Region);
        }
    }
}
