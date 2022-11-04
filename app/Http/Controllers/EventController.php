<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Event;
use App\Models\Governorate;
use App\Models\Order;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class EventController extends Controller
{
    public function index()
    {
        if (auth()->user())
        {
            $events = Event::where('user_id','!=',auth()->user()->id)->paginate(12);

        } else {
            $events = Event::paginate(12);
        }

        return view('website.events.index',compact('events'));
    }

    public function myEvent()
    {
        $events = Event::where('user_id',auth()->user()->id)->paginate(12);
        return view('website.events.myEvents',compact('events'));
    }

    public function category($id)
    {
        $category         = Category::status(1)->findOrFail($id);
        $events           = Event::status('Available')->where('category_id',$category->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function country($id)
    {
        $country          = Country::findOrFail($id);
        $events           = Event::status('Available')->where('country_id',$country->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function governorate($id)
    {
        $governorate      = Governorate::findOrFail($id);
        $events           = Event::status('Available')->where('governorate_id',$governorate->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function city($id)
    {
        $city             = City::findOrFail($id);
        $events           = Event::status('Available')->where('city_id',$city->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $order = Order::where('order_number',$event->id)->with('user_to')->first();
       // dd($order == true);
        return view('website.events.show',compact('event','order'));
    }

    public function create()
    {
        if (auth()->user()->user_type == 'customer' || auth()->user()->user_type == 'dashboard'){
            $categories = Category::status(1)->get();
            $countries = Country::all();
            $governorates = Governorate::all();
            $cities = City::all();
            return view('website.events.create',compact('categories','countries','governorates','cities'));
        } else {
            return redirect()->route('allEvents');
        }

    }

    public function store(EventRequest $request)
    {
        $events = new Event();
        if (LaravelLocalization::getCurrentLocale() == 'ar')
        {
            $events->setTranslation('title', 'en', $request->title_en ?? $request->title_ar)
                ->setTranslation('title', 'ar', $request->title_ar ?? $request->title_ar)
                ->setTranslation('title', 'fr', $request->title_fr ?? $request->title_ar);
        }elseif (LaravelLocalization::getCurrentLocale() == 'en') {
            $events->setTranslation('title', 'en', $request->title_en ?? $request->title_en)
                ->setTranslation('title', 'ar', $request->title_ar ?? $request->title_en)
                ->setTranslation('title', 'fr', $request->title_fr ?? $request->title_en);
        }elseif (LaravelLocalization::getCurrentLocale() == 'fr') {
            $events->setTranslation('title', 'en', $request->title_en ?? $request->title_fr)
                ->setTranslation('title', 'ar', $request->title_ar ?? $request->title_fr)
                ->setTranslation('title', 'fr', $request->title_fr ?? $request->title_fr);
        }

        if (LaravelLocalization::getCurrentLocale() == 'ar')
        {
            $events
                ->setTranslation('description', 'en', $request->description_en ?? $request->description_ar)
                ->setTranslation('description', 'ar', $request->description_ar ?? $request->description_ar)
                ->setTranslation('description', 'fr', $request->description_fr ?? $request->description_ar);
        }elseif (LaravelLocalization::getCurrentLocale() == 'en') {
            $events
                ->setTranslation('description', 'en', $request->description_en ?? $request->description_en)
                ->setTranslation('description', 'ar', $request->description_ar ?? $request->description_en)
                ->setTranslation('description', 'fr', $request->description_fr ?? $request->description_en);
        }elseif (LaravelLocalization::getCurrentLocale() == 'fr') {
            $events
                ->setTranslation('description', 'en', $request->description_en ?? $request->description_fr)
                ->setTranslation('description', 'ar', $request->description_ar ?? $request->description_fr)
                ->setTranslation('description', 'fr', $request->description_fr ?? $request->description_fr);
        }

        if (LaravelLocalization::getCurrentLocale() == 'ar')
        {
            $events
                ->setTranslation('location', 'en', $request->location_en ?? $request->location_ar)
                ->setTranslation('location', 'ar', $request->location_ar ?? $request->location_ar)
                ->setTranslation('location', 'fr', $request->location_fr ?? $request->location_ar);
        }elseif (LaravelLocalization::getCurrentLocale() == 'en') {
            $events
                ->setTranslation('location', 'en', $request->location_en ?? $request->location_en)
                ->setTranslation('location', 'ar', $request->location_ar ?? $request->location_en)
                ->setTranslation('location', 'fr', $request->location_fr ?? $request->location_en);
        }elseif (LaravelLocalization::getCurrentLocale() == 'fr') {
            $events
                ->setTranslation('location', 'en', $request->location_en ?? $request->location_fr)
                ->setTranslation('location', 'ar', $request->location_ar ?? $request->location_fr)
                ->setTranslation('location', 'fr', $request->location_fr ?? $request->location_fr);
        }


        $events->time               = $request->time;
        $events->date               = $request->date;
        $events->country_id         = $request->country_id;
        $events->governorate_id     = $request->governorate_id;
        $events->city_id            = $request->city_id;
        $events->category_id        = $request->category_id;
        $events->budget             = $request->budget;
        $events->user_id            = auth()->user()->id;
        $events->create_user_id     = auth()->user()->id;
        $events->status             = 'Stopped';
        if ($request->hasFile('images')) {
            $events
                ->addMediaFromRequest('images')
                ->UsingName($events->title_en ?? Str::random(20))
                ->UsingFileName($events->title_en ?? Str::random(20))
                ->toMediaCollection('images');
        }
        $events->tags()->sync($request->event_id);
        $events->save();
        return redirect()->route('event.create')
            ->with(['message' => __('website/home.added_event_successfully')]);
    }

}

