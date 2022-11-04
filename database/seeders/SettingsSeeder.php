<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Setting();
        $settings
            ->setTranslation('title', 'en', 'GDP')
            ->setTranslation('title', 'ar', 'GDP')
            ->setTranslation('title', 'fr', 'GDP');
        $settings
            ->setTranslation('content', 'en', 'Getting Day Planned - AASTMT©')
            ->setTranslation('content', 'ar', 'Getting Day Planned - AASTMT©')
            ->setTranslation('content', 'fr', 'Getting Day Planned - AASTMT©');
        $settings->phone     = 010101010101;
        $settings->email     = 'info@event.com';
        $settings->facebook  = 'facebook';
        $settings->twitter   = 'twitter';
        $settings->youtube   = 'youtube';
        $settings->whatsApp  = '002010101010101';
        $settings->instagram = 'instagram';
        $settings->telegram  = 'telegram';
        $settings->linkedin  = 'in/linkedin';
        $settings->location  = 'Egypt, Cairo';
        $settings->save();
    }
}
