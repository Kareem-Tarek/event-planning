<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->setTranslation('name', 'en', 'Nasr City')
            ->setTranslation('name', 'ar', 'مدينة نصر')
            ->setTranslation('name', 'fr', 'Nasr ville');
        $city->country_id = 1; // Country Egypt = id:1
        $city->governorate_id = 1; // Governorate Cairo = id:1
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', '5th Settlement')
            ->setTranslation('name', 'ar', 'التجمع الخامس')
            ->setTranslation('name', 'fr', '5ème colonie');
        $city->country_id = 1;
        $city->governorate_id = 1;
        $city->create_user_id = 2;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', 'Sheikh Zayed')
            ->setTranslation('name', 'ar', 'الشيخ زايد')
            ->setTranslation('name', 'fr', 'Cheikh Zayed');
        $city->country_id = 1;
        $city->governorate_id = 1;
        $city->create_user_id = 3;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', '6th of October')
            ->setTranslation('name', 'ar', 'السادس من اكتوبر')
            ->setTranslation('name', 'fr', '6 Octobre');
        $city->country_id = 1;
        $city->governorate_id = 1;
        $city->create_user_id = 4;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', 'Heliopolis')
            ->setTranslation('name', 'ar', 'مصر الجديدة')
            ->setTranslation('name', 'fr', 'Héliopolis');
        $city->country_id = 1;
        $city->governorate_id = 1;
        $city->create_user_id = 5;
        $city->save();

        // $city = new City();
        // $city->setTranslation('name', 'en', 'Kasbah alawdia')
        //     ->setTranslation('name', 'ar', 'قصبة الاوديه')
        //     ->setTranslation('name', 'fr', 'Kasbah alawdia');
        // $city->country_id = 2; // Country Morocco = id:2
        // $city->governorate_id = 2; // Governorate Rabat = id:2
        // $city->create_user_id = 2;
        // $city->save();

        // $city = new City();
        // $city->setTranslation('name', 'en', 'El Battan')
        //     ->setTranslation('name', 'ar', 'البطان')
        //     ->setTranslation('name', 'fr', 'El Battán');
        // $city->country_id = 3; // Country Tunisia = id:3
        // $city->governorate_id = 3; // Governorate Tunisia = id:3
        // $city->create_user_id = 3;
        // $city->save();

        // $city = new City();
        // $city->setTranslation('name', 'en', 'Badaro')
        //     ->setTranslation('name', 'ar', 'بدارو')
        //     ->setTranslation('name', 'fr', 'Badaro');
        // $city->country_id = 4; // Country Lebanon = id:4
        // $city->governorate_id = 4; // Governorate Beirut = id:4
        // $city->create_user_id = 4;
        // $city->save();

        // $city = new City();
        // $city->setTranslation('name', 'en', 'Sinaiyah Qadeem')
        //     ->setTranslation('name', 'ar', 'الصناعية القديمة')
        //     ->setTranslation('name', 'fr', 'Sinaiyah Qadeem');
        // $city->country_id = 5; // Country Saudi Arabia = id:5
        // $city->governorate_id = 5; // Governorate Riyadh = id:5
        // $city->create_user_id = 5;
        // $city->save();
    }
}
