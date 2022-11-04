<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name_ar'          => 'required|min:3|max:199',
            'name_en'          => 'required|min:3|max:199',
            'name_fr'          => 'required|min:3|max:199',
            'description_ar'   => 'required|max:500',
            'description_en'   => 'required|max:500',
            'description_fr'   => 'required|max:500',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name_ar'        => 'required|min:3|max:199|unique:categories,name',
            'name_en'        => 'required|min:3|max:199',
            'name_fr'        => 'required|min:3|max:199',
            'description_ar' => 'required|max:500',
            'description_en' => 'required|max:500',
            'description_fr' => 'required|max:500',
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


            // Validation description ar
            'description_ar.required' => __('admin/request.description_ar_required'),
            'description_ar.min'      => __('admin/request.description_ar_min'),
            'description_ar.max'      => __('admin/request.description_ar_max'),

            // Validation description en
            'description_en.required' => __('admin/request.description_en_required'),
            'description_en.min'      => __('admin/request.description_en_min'),
            'description_en.max'      => __('admin/request.description_en_max'),

            // Validation description fr
            'description_fr.required' => __('admin/request.description_fr_required'),
            'description_fr.min'      => __('admin/request.description_fr_min'),
            'description_fr.max'      => __('admin/request.description_fr_max'),
        ];
    }
}
