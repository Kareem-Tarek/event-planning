<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest

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
            'name_ar'           => 'required|min:3|max:199',
            'name_en'           => 'required|min:3|max:199',
            'name_fr'           => 'required|min:3|max:199',
            'country_id'        => 'required|exists:countries,id',
            'governorate_id'    => 'required|exists:governorates,id',
        ];
    }

    protected function onUpdate()
    {
        return [
            'name_ar'           => 'required|min:3|max:199',
            'name_en'           => 'required|min:3|max:199',
            'name_fr'           => 'required|min:3|max:199',
            'country_id'        => 'required|exists:countries,id',
            'governorate_id'    => 'required|exists:governorates,id',
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
            'name_ar.required'          => __('admin/request.name_ar_required'),
            'name_ar.min'               => __('admin/request.name_ar_min'),
            'name_ar.max'               => __('admin/request.name_ar_max'),

            // Validation name en
            'name_en.required'          => __('admin/request.name_en_required'),
            'name_en.min'               => __('admin/request.name_en_min'),
            'name_en.max'               => __('admin/request.name_en_max'),

            // Validation name fr
            'name_fr.required'          => __('admin/request.name_fr_required'),
            'name_fr.min'               => __('admin/request.name_fr_min'),
            'name_fr.max'               => __('admin/request.name_fr_max'),
            // Validation country id
            'country_id.required'       => __('admin/request.country_id'),
            'country_id.exists'         => __('admin/request.country_exists'),
            // Validation governorate id
            'governorate_id.required'   => __('admin/request.governorate_id'),
            'governorate_id.exists'     => __('admin/request.governorate_exists'),
        ];
    }
}
