<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContributionRequest;
use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index()
    {
        $contributions = Contribution::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.contributions.index',compact('contributions'));
    }

    public function create()
    {
        return view('dashboard.contributions.create');
    }

    public function store(ContributionRequest $request)
    {
        $contributions = new Contribution();
        $contributions->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)
            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr);
        $contributions->create_user_id = auth()->user()->id;
        $contributions->category_id = $request->category_id;
        if($request->hasFile('images')) {
            $contributions
                ->clearMediaCollection('images')
                ->addMediaFromRequest('images')
                ->UsingName($request->title_en)
                ->UsingFileName($request->title_en)
                ->toMediaCollection('images');
        }
        $contributions->save();

        return redirect()->route('contributions.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }

    public function show()
    {
        return abort('404');
    }

    public function edit($id)
    {
        $model = Contribution::findOrFail($id);
        return view('dashboard.contributions.edit',compact('model'));
    }

    public function update(ContributionRequest $request, $id)
    {
        $contributions = Contribution::findOrFail($id);
        $contributions->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)
            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr);
        $contributions->status         = $request->status;
        $contributions->update_user_id = auth()->user()->id;
        $contributions->category_id = $request->category_id;
        if($request->hasFile('images')) {
            $contributions
                ->clearMediaCollection('images')
                ->addMediaFromRequest('images')
                ->UsingName($request->title_en)
                ->UsingFileName($request->title_en)
                ->toMediaCollection('images');
        }
        $contributions->save();

        return redirect()->route('contributions.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }

    public function destroy($id)
    {
        $contributions = Contribution::findOrFail($id);
        $contributions->delete();
        return redirect()->route('contributions.index')
            ->with(['message' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $contributions = Contribution::orderBy('created_at','asc')->onlyTrashed()->paginate(30);
        return view('dashboard.contributions.delete',compact('contributions'));
    }

    public function restore($id)
    {
        Contribution::withTrashed()->find($id)->restore();
        return redirect()->route('contributions.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }

    public function forceDelete($id)
    {
        Contribution::where('id', $id)->forceDelete();
        return redirect()->route('contributions.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
