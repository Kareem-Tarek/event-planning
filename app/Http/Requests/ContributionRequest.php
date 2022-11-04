<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContributionRequest extends FormRequest
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
            'title_ar'    => 'required|min:3|max:199',
            'title_en'    => 'required|min:3|max:199',
            'title_fr'    => 'required|min:3|max:199',
            'content_ar'  => 'required|max:500',
            'content_en'  => 'required|max:500',
            'content_fr'  => 'required|max:500',
            'category_id' => 'required|exists:categories,id',
            'status'      => 'required|max:500',
        ];
    }


    protected function onUpdate()
    {
        return [
            'title_ar'   => 'required|min:3|max:199',
            'title_en'   => 'required|min:3|max:199',
            'title_fr'   => 'required|min:3|max:199',
            'content_ar' => 'required|max:500',
            'content_en' => 'required|max:500',
            'content_fr' => 'required|max:500',
            'category_id' => 'required|exists:categories,id',
            'status'     => 'required|in:1,0',
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

            // Validation title ar
            'title_ar.required' => __('admin/request.title_ar_required'),
            'title_ar.min'      => __('admin/request.title_ar_min'),
            'title_ar.max'      => __('admin/request.title_ar_max'),

            // Validation title en
            'title_en.required' => __('admin/request.title_en_required'),
            'title_en.min'      => __('admin/request.title_en_min'),
            'title_en.max'      => __('admin/request.title_en_max'),

            // Validation title fr
            'title_fr.required' => __('admin/request.title_fr_required'),
            'title_fr.min'      => __('admin/request.title_fr_min'),
            'title_fr.max'      => __('admin/request.title_fr_max'),


            // Validation content ar
            'content_ar.required' => __('admin/request.content_ar_required'),
            'content_ar.max'      => __('admin/request.content_ar_max'),

            // Validation content en
            'content_en.required' => __('admin/request.content_en_required'),
            'content_en.max'      => __('admin/request.content_en_max'),

            // Validation content fr
            'content_fr.required' => __('admin/request.content_fr_required'),
            'content_fr.max'      => __('admin/request.content_fr_max'),

            // Validation country id
            'category_id.required'       => __('admin/request.category_id'),
            'category_id.exists'         => __('admin/request.category_exists'),

            // Validation status
            'status.required'                  => __('admin/request.status_required'),
            'status.in'                        => __('admin/request.status_selected'),
        ];
    }
}
