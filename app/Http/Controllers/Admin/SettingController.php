<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $settings = Setting::first();
        return view('dashboard.setting',compact('settings'));
    }

    public function update(SettingRequest $request)
    {
        $settings = Setting::first();
        $settings->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr);

        $settings->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr);
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->youtube = $request->youtube;
        $settings->instagram = $request->instagram;
        $settings->telegram = $request->telegram;
        $settings->whatsApp = $request->whatsApp;
        $settings->linkedin = $request->linkedin;
        $settings->location = $request->location;

        $settings->save();



        return redirect()->route('setting');
    }
}
