<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title_ar'           => 'nullable|min:3|max:199',
            'title_en'           => 'nullable|min:3|max:199',
            'title_fr'           => 'nullable|min:3|max:199',
            'description_ar'     => 'nullable|max:600',
            'description_en'     => 'nullable|max:600',
            'description_fr'     => 'nullable|max:600',
            'location_ar'        => 'nullable|min:3|max:199',
            'location_en'        => 'nullable|min:3|max:199',
            'location_fr'        => 'nullable|min:3|max:199',
            'time'               => 'required|sometimes',
            'date'               => 'required|date',
            'budget'             => 'required|integer',
            'country_id'         => 'required',
            'governorate_id'     => 'required',
            'city_id'            => 'required',
            'category_id'        => 'required',
            'user_id'            => 'nullable',
         //   'images'             => 'dimensions:width=360,height=220',
            'status'             => 'nullable|in:Stopped,Available,Expired',
        ];
    }


    public function messages()
    {
        return [

            // Validation title ar
            'title_ar.required'                => __('admin/request.title_ar_required'),
            'title_ar.min'                     => __('admin/request.title_ar_min'),
            'title_ar.max'                     => __('admin/request.title_ar_max'),

            // Validation title en
            'title_en.required'                => __('admin/request.title_en_required'),
            'title_en.min'                     => __('admin/request.title_en_min'),
            'title_en.max'                     => __('admin/request.title_en_max'),

            // Validation title fr
            'title_fr.required'                => __('admin/request.title_fr_required'),
            'title_fr.min'                     => __('admin/request.title_fr_min'),
            'title_fr.max'                     => __('admin/request.title_fr_max'),

            // Validation description ar
            'description_ar.required'          => __('admin/request.description_ar_required'),
            'description_ar.max'               => __('admin/request.description_ar_max'),

            // Validation description en
            'description_en.required'          => __('admin/request.description_en_required'),
            'description_en.max'               => __('admin/request.description_en_max'),

            // Validation description fr
            'description_fr.required'          => __('admin/request.description_fr_required'),
            'description_fr.max'               => __('admin/request.description_fr_max'),

            // Validation location ar
            'location_ar.required'             => __('admin/request.location_ar_required'),
            'location_ar.min'                  => __('admin/request.location_ar_min'),
            'location_ar.max'                  => __('admin/request.location_ar_max'),


            // Validation location en
            'location_en.required'             => __('admin/request.location_en_required'),
            'location_en.min'                  => __('admin/request.location_en_min'),
            'location_en.max'                  => __('admin/request.location_en_max'),

            // Validation location fr
            'location_fr.required'             => __('admin/request.location_fr_required'),
            'location_fr.min'                  => __('admin/request.location_fr_min'),
            'location_fr.max'                  => __('admin/request.location_fr_max'),

            // Validation time
            'time.required'                    => __('admin/request.time_required'),

            // Validation date
            'date.required'                    => __('admin/request.date_required'),

            // Validation country
            'country_id.required'              => __('admin/request.country_id_required'),

            // Validation governorate
            'governorate_id.required'          => __('admin/request.governorate_id_required'),

            // Validation city
            'city_id.required'                 => __('admin/request.city_id_required'),

            // Validation category
            'category_id.required'             => __('admin/request.category_id_required'),

            // Validation user
            'user_id.required'                 => __('admin/request.user_id_required'),

            // Validation budget
            'budget.required'                  => __('admin/request.budget_required'),
            'budget.integer'                   => __('admin/request.budget_integer'),

            // Validation status
            'status.required'                  => __('admin/request.status_required'),
            'status.in'                        => __('admin/request.status_selected'),

        ];
    }
}
