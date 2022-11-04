<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            'name'                      => 'required|string|min:3|max:199',
            'username'                  => 'required|string|min:3|max:199',Rule::unique('users')->ignore($this->id),
            'phone'                     => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'email'                     => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'bio'                       => 'nullable|string|max:255',
            'gender'                    => 'string|in:male,female',
            'dob'                       => 'nullable|date',
            'address'                   => 'nullable|string|max:255',
            'postal_code'               => 'nullable|numeric',
            'state_province'            => 'nullable|string',
            'facebook'                  => 'nullable|string',
            'twitter'                   => 'nullable|string',
            'instagram'                 => 'nullable|string',
            'whatsApp'                  => 'nullable|string',
            'telegram'                  => 'nullable|string',
            'country_id'                => 'nullable|exists:countries,id',
            'governorate_id'            => 'nullable|exists:governorates,id',
            'city_id'                   => 'nullable|exists:cities,id',
            'avatar'                    => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
            'cover'                     => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
        ];
    }
    public function messages()
    {
        return [
            // Validation name
            'name.required'             => __('admin/request.name_required'),
            'name.min'                  => __('admin/request.name_min'),
            'name.max'                  => __('admin/request.name_max'),
            // Validation username
            'username.required'         => __('admin/request.username_required'),
            'username.min'              => __('admin/request.username_min'),
            'username.max'              => __('admin/request.username_max'),
            // Validation phone
            'phone.required'            => __('admin/request.phone_required'),
            'phone.numeric'             => __('admin/request.phone_numeric'),
            'phone.digits'              => __('admin/request.phone_digits'),
            'phone.unique'              => __('admin/request.phone_unique'),
            // Validation email
            'email.required'            => __('admin/request.email_required'),
            'email.min'                 => __('admin/request.email_min'),
            'email.max'                 => __('admin/request.email_max'),
            'email.email'               => __('admin/request.email_email'),
            // Validation bio
            'bio.max'                   => __('admin/request.bio_max'),
            // Validation gender
            'gender.in'                 => __('admin/request.gender_in'),
            // Validation dob
            'dob.date'                  => __('admin/request.dob_date'),
            // Validation address
            'address.max'               => __('admin/request.address_max'),
            // Validation postal code
            'postal_code.numeric'       => __('admin/request.postal_code_numeric'),
            // Validation country id
            'country_id.required'       => __('admin/request.country_id'),
            'country_id.exists'         => __('admin/request.country_exists'),
            // Validation governorate id
            'governorate_id.required'   => __('admin/request.governorate_id'),
            'governorate_id.exists'     => __('admin/request.governorate_exists'),
            // Validation city id
            'city_id.required'          => __('admin/request.city_id_required'),
            'city_id.exists'            => __('admin/request.city_exists'),
            'avatar.image'              => __('admin/request.avatar_image'),
            'cover.image'               => __('admin/request.cover_image')
        ];
    }
}
