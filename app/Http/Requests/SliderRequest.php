<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_ar'       => 'required|min:3|max:199',
            'title_en'       => 'required|min:3|max:199',
            'title_fr'       => 'required|min:3|max:199',

            'content_ar'     => 'required|min:3|max:199',
            'content_en'     => 'required|min:3|max:199',
            'content_fr'     => 'required|min:3|max:199',

            'name_button_ar' => 'nullable|min:3|max:199',
            'name_button_en' => 'nullable|min:3|max:199',
            'name_button_fr' => 'nullable|min:3|max:199',


        ];
    }

    public function messages()
    {
        return [

            // Validation name ar
            'title_ar.required' => __('admin/request.title_ar_required'),
            'title_ar.min'      => __('admin/request.title_ar_min'),
            'title_ar.max'      => __('admin/request.title_ar_max'),

            // Validation name en
            'title_en.required' => __('admin/request.title_en_required'),
            'title_en.min'      => __('admin/request.title_en_min'),
            'title_en.max'      => __('admin/request.title_en_max'),
            
            // Validation name fr
            'title_fr.required'   => __('admin/request.title_fr_required'),
            'title_fr.min'      => __('admin/request.title_fr_min'),
            'title_fr.max'      => __('admin/request.title_fr_max'),
            
            'content_ar.required' => __('admin/request.content_ar_required'),
            'content_ar.min'      => __('admin/request.content_ar_min'),
            'content_ar.max'      => __('admin/request.content_ar_max'),


            'content_en.required' => __('admin/request.content_en_required'),
            'content_en.min'      => __('admin/request.content_en_min'),
            'content_en.max'      => __('admin/request.content_en_max'),

            'content_fr.required' => __('admin/request.content_fr_required'),
            'content_fr.min'      => __('admin/request.content_fr_min'),
            'content_fr.max'      => __('admin/request.content_fr_max'),


            'name_button_ar.required' => __('admin/request.name_button_ar_required'),
            'name_button_ar.min'      => __('admin/request.name_button_ar_min'),
            'name_button_ar.max'      => __('admin/request.name_button_ar_max'),


            'name_button_en.required' => __('admin/request.name_button_en_required'),
            'name_button_en.min'      => __('admin/request.name_button_en_min'),
            'name_button_en.max'      => __('admin/request.name_button_en_max'),

        

            'name_button_fr.required' => __('admin/request.name_button_fr_required'),
            'name_button_fr.min'      => __('admin/request.name_button_fr_min'),
            'name_button_fr.max'      => __('admin/request.name_button_fr_max'),
        ];
    }
}
