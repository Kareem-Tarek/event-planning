<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.events.index',compact('events'));
    }


    public function create()
    {
        return view('dashboard.events.create');
    }


    public function store(EventRequest $request)
    {
        $events = new Event();
        $events->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'ar', $request->description_ar)
            ->setTranslation('description', 'fr', $request->description_fr)
            ->setTranslation('location', 'en', $request->location_en)
            ->setTranslation('location', 'ar', $request->location_ar)
            ->setTranslation('location', 'fr', $request->location_fr);
        $events->time = $request->time;
        $events->date = $request->date;
        $events->country_id = $request->country_id;
        $events->governorate_id = $request->governorate_id;
        $events->city_id = $request->city_id;
        $events->category_id = $request->category_id;
        $events->budget = $request->budget;
        $events->user_id = $request->user_id;
        $events->create_user_id = auth()->user()->id;
        $events->status = $request->status;
        if ($request->hasFile('images')) {
            $events
                ->addMediaFromRequest('images')
                ->UsingName(Str::random(50))
                ->UsingFileName(Str::random(50))
                ->toMediaCollection('images');
        }
        $events->tags()->sync($request->event_id);
        $events->save();
        return redirect()->route('events.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


    public function edit($id)
    {
        $model = Event::findOrFail($id);
        return view('dashboard.events.edit', compact('model'));
    }

    public function update(EventRequest $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->setTranslation('title', 'en', $request->title_en)
              ->setTranslation('title', 'ar', $request->title_ar)
              ->setTranslation('title', 'fr', $request->title_fr)
              ->setTranslation('description', 'en', $request->description_en)
              ->setTranslation('description', 'ar', $request->description_ar)
              ->setTranslation('description', 'fr', $request->description_fr)
              ->setTranslation('location', 'en', $request->location_en)
              ->setTranslation('location', 'ar', $request->location_ar)
              ->setTranslation('location', 'fr', $request->location_fr);
        $event->time                       = $request->time;
        $event->date                       = $request->date;
        $event->country_id                 = $request->country_id;
        $event->governorate_id             = $request->governorate_id;
        $event->city_id                    = $request->city_id;
        $event->category_id                = $request->category_id;
        $event->budget                     = $request->budget;
        $event->user_id                    = $request->user_id;
        $event->update_user_id             = auth()->user()->id;
        $event->status                     = $request->status;
        if($request->hasFile('images')) {
            $event
                ->clearMediaCollection('images')
                ->addMediaFromRequest('images')
                ->UsingName($request->title_en)
                ->UsingFileName($request->title_en)
                ->toMediaCollection('images');
        }
        $event->tags()->sync($request->tag_id);
        $event->save();

        return redirect()->route('events.index')
            ->with(['message' => __('admin/home.edited_successfully')]);

    }


    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        return redirect()->route('events.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $events = Event::orderBy('created_at','asc')->onlyTrashed()->paginate(30);
        return view('dashboard.events.delete',compact('events'));
    }


    public function restore($id)
    {
        $events = Event::withTrashed()->find($id);
        $events->city()->restore();
        $events->restore();
        return redirect()->route('events.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }


    public function CommentDelete($id)
    {
        $events = Event::withTrashed()->find($id);
        $events->city()->forceDelete();
        $events->forceDelete();
        return redirect()->route('events.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }

}
