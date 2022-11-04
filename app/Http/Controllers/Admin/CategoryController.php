<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $categories = new Category();
        $categories->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr)
            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr);
        $categories->create_user_id = auth()->user()->id;
        $categories->icon           = $request->icon;
        $categories->color          = $request->color;
        $categories->save();

        return redirect()->route('categories.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }

    public function show()
    {
        return abort('404');
    }

    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('dashboard.categories.edit',compact('model'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr)
            ->setTranslation('content', 'en', $request->content_en)
            ->setTranslation('content', 'ar', $request->content_ar)
            ->setTranslation('content', 'fr', $request->content_fr);
        $categories->status         = $request->status;
        $categories->icon           = $request->icon;
        $categories->color          = $request->color;
        $categories->update_user_id = auth()->user()->id;
        $categories->save();

        return redirect()->route('categories.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index')
            ->with(['message' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $categories = Category::orderBy('created_at','asc')->onlyTrashed()->paginate(30);
        return view('dashboard.categories.delete',compact('categories'));
    }

    public function restore($id)
    {
        Category::withTrashed()->find($id)->restore();
        return redirect()->route('categories.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }

    public function forceDelete($id)
    {
        Category::where('id', $id)->forceDelete();
        return redirect()->route('categories.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
