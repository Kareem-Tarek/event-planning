<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $governorate = new Governorate();
        $governorate->setTranslation('name', 'en', 'Cairo')
            ->setTranslation('name', 'ar', 'القاهرة')
            ->setTranslation('name', 'fr', 'Caire');
        $governorate->country_id = 1;
        $governorate->create_user_id = 1;
        $governorate->save();

        // $governorate = new Governorate();
        // $governorate->setTranslation('name', 'en', 'Rabat')
        //     ->setTranslation('name', 'ar', 'الرباط')
        //     ->setTranslation('name', 'fr', 'Rabat');
        // $governorate->country_id = 2;
        // $governorate->create_user_id = 2;
        // $governorate->save();

        // $governorate = new Governorate();
        // $governorate->setTranslation('name', 'en', 'Ben Arous')
        //     ->setTranslation('name', 'ar', 'بن عروس')
        //     ->setTranslation('name', 'fr', 'Ben Arous');
        // $governorate->country_id = 3;
        // $governorate->create_user_id = 3;
        // $governorate->save();
        
        // $governorate = new Governorate();
        // $governorate->setTranslation('name', 'en', 'Beirut')
        //     ->setTranslation('name', 'ar', 'بيروت')
        //     ->setTranslation('name', 'fr', 'Beyrouth');
        // $governorate->country_id = 4;
        // $governorate->create_user_id = 4;
        // $governorate->save();

        // $governorate = new Governorate();
        // $governorate->setTranslation('name', 'en', 'Riyadh')
        //     ->setTranslation('name', 'ar', 'الرياض')
        //     ->setTranslation('name', 'fr', 'Riyad');
        // $governorate->country_id = 5;
        // $governorate->create_user_id = 5;
        // $governorate->save();
    }
}
