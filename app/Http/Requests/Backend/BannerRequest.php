<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->id){
            $rule = [
                'banner_image' => 'mimes:jpeg,png,jpg,webp|max:2048',
                'banner_title' => 'required|string|max:255',
                'banner_subtitle' => 'required|string|max:255',
                'status' => 'required|numeric',
            ];
        }else{
            $rule = [
                'banner_image' => 'mimes:jpeg,png,jpg,webp|max:2048',
                'banner_title' => 'required|string|max:255',
                'banner_subtitle' => 'required|string|max:255',
                'status' => 'required|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'banner_image.required' => 'Banner Image is required',
            'banner_image.mimes' => 'Banner Image must be a file of type: jpeg, png, jpg, webp.',
            'banner_image.max' => 'Banner Image may not be greater than 2048 kilobytes.',

            'banner_title.required' => 'Banner Title is required',
            'banner_title.max' => 'Banner Title may not be greater than 255 characters.',
            'banner_title.string' => 'Banner Title must be a string.',

            'banner_subtitle.required' => 'Banner Subtitle is required',
            'banner_subtitle.max' => 'Banner Subtitle may not be greater than 255 characters.',
            'banner_subtitle.string' => 'Banner Subtitle must be a string.',

            'status.required' => 'Status is required',
            'status.numeric' => 'Status must be a number.',
        ];
    }
}
