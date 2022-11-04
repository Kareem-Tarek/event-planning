<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GovernorateRequest;
use App\Models\Governorate;

class GovernorateController extends Controller
{

    public function index()
    {
        $governorates = Governorate::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.governorates.index',compact('governorates'));
    }


    public function create()
    {
        return view('dashboard.governorates.create');
    }


    public function store(GovernorateRequest $request)
    {
        $governorates = new Governorate();
        $governorates->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $governorates->country_id = $request->country_id;
        $governorates->create_user_id = auth()->user()->id;
        $governorates->save();

        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


    public function edit($id)
    {
        $model = Governorate::findOrFail($id);
        return view('dashboard.governorates.edit',compact('model'));
    }


    public function update(GovernorateRequest $request, $id)
    {
        $governorates = Governorate::findOrFail($id);
        $governorates->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $governorates->country_id = $request->country_id;
        $governorates->update_user_id = auth()->user()->id;

        $governorates->save();

        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $governorates = Governorate::findOrFail($id);
        $governorates->city()->delete();
        $governorates->delete();
        return redirect()->route('governorates.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }


    public function delete()
    {
        $governorates = Governorate::orderBy('created_at','asc')->onlyTrashed()->paginate(30);
        return view('dashboard.governorates.delete',compact('governorates'));
    }


    public function restore($id)
    {
        $governorates = Governorate::withTrashed()->find($id);
        $governorates->city()->restore();
        $governorates->restore();
        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }


    public function forceDelete($id)
    {
        $governorates = Governorate::withTrashed()->find($id);
        $governorates->city()->forceDelete();
        $governorates->forceDelete();
        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }

}
