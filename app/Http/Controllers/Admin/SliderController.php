<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->paginate(30);
        return view('dashboard.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('dashboard.sliders.create');
    }


    public function store(SliderRequest $request)
    {
        $sliders = new Slider();

        $sliders->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)

            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr)

            ->setTranslation('name_button', 'en', $request->name_button_en)
            ->setTranslation('name_button', 'ar', $request->name_button_ar)
            ->setTranslation('name_button', 'fr', $request->name_button_fr);

        $sliders->create_user_id = auth()->user()->id;
        $sliders->link_button = $request->link_button;
        $sliders->color = $request->color;
        $sliders->save();

        return redirect()->route('sliders.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


    public function edit($id)
    {
        $model = Slider::findOrFail($id);
        return view('dashboard.sliders.edit', compact('model'));
    }


    public function update(SliderRequest $request, $id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)

            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr)

            ->setTranslation('name_button', 'en', $request->name_button_en)
            ->setTranslation('name_button', 'ar', $request->name_button_ar)
            ->setTranslation('name_button', 'fr', $request->name_button_fr);

        $sliders->update_user_id = auth()->user()->id;
        $sliders->link_button = $request->link_button;
        $sliders->color = $request->color;
        $sliders->save();

        return redirect()->route('sliders.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $sliders = slider::findOrFail($id);
        $sliders->delete();
        return redirect()->route('sliders.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->onlyTrashed()->paginate(30);
        return view('dashboard.sliders.delete', compact('sliders'));
    }

    public function restore($id)
    {
        Slider::withTrashed()->find($id)->restore();
        return redirect()->route('sliders.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }

    public function forceDelete($id)
    {
        Slider::where('id', $id)->forceDelete();
        return redirect()->route('sliders.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
