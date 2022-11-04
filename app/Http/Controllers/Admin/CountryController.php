<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Clockwork\Request\Request;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::orderBy('created_at', 'asc')->paginate(30);
        return view('dashboard.countries.index', compact('countries'));
    }


    public function create()
    {
        return view('dashboard.countries.create');
    }


    public function store(CountryRequest $request)
    {
        $countries = new Country();
        $countries->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $countries->create_user_id = auth()->user()->id;
        $countries->save();

        return redirect()->route('countries.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


    public function show()
    {
        return abort(401);
    }


    public function edit($id)
    {
        $model = Country::findOrFail($id);
        return view('dashboard.countries.edit', compact('model'));
    }


    public function update(CountryRequest $request, $id)
    {
        $countries = Country::findOrFail($id);
        $countries->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $countries->update_user_id = auth()->user()->id;
        $countries->save();

        return redirect()->route('countries.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $countries = Country::find($id);
        $countries->governorate()->delete();
        $countries->city()->delete();

        $countries->delete();
        return redirect()->route('countries.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }


    public function delete()
    {
        $countries = Country::orderBy('created_at','asc')->onlyTrashed()->paginate(30);

        return view('dashboard.countries.delete',compact('countries'));
    }


    public function restore(Request $request,$id)
    {
        $countries = Country::withTrashed()->find($id);
        $countries->governorate()->restore();
        $countries->city()->restore();
        $countries->restore();
        return redirect()->route('countries.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }


    public function forceDelete($id)
    {
        $countries = Country::withTrashed()->find($id);
        $countries->governorate()->forceDelete();
        $countries->city()->forceDelete();
        $countries->forceDelete();
        return redirect()->route('countries.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }

}
