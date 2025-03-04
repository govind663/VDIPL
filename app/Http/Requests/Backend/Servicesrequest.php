<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class Servicesrequest extends FormRequest
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
                'service_name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',                
                'service_image' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
                'service_icon' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|numeric',
            ];
        }else{
            $rule = [                
                'service_name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',                
                'service_image' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
                'service_icon' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'service_name.required' => 'Service Name is required',
            'service_name.max' => 'Service Name must not be greater than 255 characters',
            'service_name.string' => 'Service Name must be a string',

            'slug.required' => 'Slug is required',
            'slug.max' => 'Slug must not be greater than 255 characters',
            'slug.string' => 'Slug must be a string',

            'service_image.required' => 'Service Image is required',
            'service_image.mimes' => 'Service Image must be a file of type: jpeg, png, jpg, webp',
            'service_image.max' => 'Service Image must not be greater than 2048 kilobytes',

            'service_icon.required' => 'Service Icon is required',
            'service_icon.mimes' => 'Service Icon must be a file of type: jpeg, png, jpg, webp',
            'service_icon.max' => 'Service Icon must not be greater than 2048 kilobytes',

            'status.required' => 'Status is required',
            'status.numeric' => 'Status must be a number',            
        ];
    }
}
