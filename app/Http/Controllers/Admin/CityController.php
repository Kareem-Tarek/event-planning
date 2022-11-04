<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::orderBy('created_at', 'asc')->paginate(30);
        return view('dashboard.cities.index', compact('cities'));
    }


    public function create()
    {
        return view('dashboard.cities.create');
    }


    public function store(CityRequest $request)
    {
        $cities = new City();
        $cities->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $cities->governorate_id = $request->governorate_id;
        $cities->country_id     = $request->country_id;
        $cities->create_user_id = auth()->user()->id;
        $cities->save();

        return redirect()->route('cities.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }



    public function edit($id)
    {
        $model = City::findOrFail($id);
        return view('dashboard.cities.edit', compact('model'));
    }


    public function update(CityRequest $request, $id)
    {
        $cities = City::findOrFail($id);
        $cities->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);

        $cities->governorate_id = $request->governorate_id;
        $cities->country_id     = $request->country_id;
        $cities->update_user_id = auth()->user()->id;
        $cities->save();

        return redirect()->route('cities.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $cities = City::findOrFail($id);

        $cities->delete();

        return redirect()->route('cities.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $cities = City::orderBy('created_at', 'asc')->onlyTrashed()->paginate(30);
        return view('dashboard.cities.delete', compact('cities'));
    }


    public function restore($id)
    {
        $cities = City::withTrashed()->find($id);
        $cities->restore();
        return redirect()->route('cities.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }


    public function forceDelete($id)
    {
        $cities = City::withTrashed()->find($id);
        $cities->forceDelete();
        return redirect()->route('cities.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
