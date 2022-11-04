<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title_ar'   => 'required|min:3|max:199',
            'title_en'   => 'required|min:3|max:199',
            'title_fr'   => 'required|min:3|max:199',
            'content_ar' => 'required|max:500|min:3',
            'content_en' => 'required|max:500|min:3',
            'content_fr' => 'required|max:500|min:3',
            'location'   => 'required|min:3|max:199',
            'email'      => 'required|min:5|max:600|email:rfc,dns',
            'phone'      => 'required|numeric|digits:11',
            'whatsApp'   => 'required|numeric|digits:14',
            'facebook'   => 'nullable',
            'linkedin'   => 'nullable',
            'twitter'    => 'nullable',
            'youtube'    => 'nullable',
            'instagram'  => 'nullable',
            'telegram'   => 'nullable',
        ];
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


            // Validation email
            'email.required'            => __('admin/request.email_required'),
            'email.min'                 => __('admin/request.email_min'),
            'email.max'                 => __('admin/request.email_max'),
            'email.email'               => __('admin/request.email_email'),


            // Validation phone
            'phone.required'            => __('admin/request.phone_required'),
            'phone.numeric'             => __('admin/request.phone_numeric'),
            'phone.digits'              => __('admin/request.phone_digits'),


            // Validation whatsApp
            'whatsApp.required'            => __('admin/request.whatsApp_required'),
            'whatsApp.numeric'             => __('admin/request.whatsApp_numeric'),
            'whatsApp.digits'              => __('admin/request.whatsApp_digits'),
        ];
    }
}
