<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function onCreate()
    {
        return [
            'name_ar'    => 'required|min:3|max:199',
            'name_en'    => 'required|min:3|max:199',
            'name_fr'    => 'required|min:3|max:199',
            'content_ar' => 'required|max:500',
            'content_en' => 'required|max:500',
            'content_fr' => 'required|max:500',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name_ar'    => 'required|min:3|max:199|unique:categories,name',
            'name_en'    => 'required|min:3|max:199',
            'name_fr'    => 'required|min:3|max:199',
            'content_ar' => 'required|max:500',
            'content_en' => 'required|max:500',
            'content_fr' => 'required|max:500',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return  request()->isMethod('put') || request()->isMethod('patch') ?
             $this->onUpdate() : $this->onCreate();
    }

    public function messages()
    {
        return [

            // Validation name ar
            'name_ar.required' => __('admin/request.name_ar_required'),
            'name_ar.min'      => __('admin/request.name_ar_min'),
            'name_ar.max'      => __('admin/request.name_ar_max'),

            // Validation name en
            'name_en.required' => __('admin/request.name_en_required'),
            'name_en.min'      => __('admin/request.name_en_min'),
            'name_en.max'      => __('admin/request.name_en_max'),

            // Validation name fr
            'name_fr.required' => __('admin/request.name_fr_required'),
            'name_fr.min'      => __('admin/request.name_fr_min'),
            'name_fr.max'      => __('admin/request.name_fr_max'),


            // Validation content ar
            'content_ar.required' => __('admin/request.content_ar_required'),
            'content_ar.max'      => __('admin/request.content_ar_max'),

            // Validation content en
            'content_en.required' => __('admin/request.content_en_required'),
            'content_en.max'      => __('admin/request.content_en_max'),

            // Validation content fr
            'content_fr.required' => __('admin/request.content_fr_required'),
            'content_fr.max'      => __('admin/request.content_fr_max'),
        ];
    }
}
