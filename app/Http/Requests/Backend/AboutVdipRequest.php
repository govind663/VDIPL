<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutVdipRequest extends FormRequest
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
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|array', // Ensure it's an array
                'image.*' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
                'description'=> 'required|string',
                'image' => 'required|array', // Ensure it's an array
                'image.*' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required.',
            'description.required' => 'The description is required.',
            'image.required' => 'The image is required.',
            'image.*.required' => 'The image is required.',
            'image.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'image.*.max' => 'The image may not be greater than 2MB.',
        ];
    }
}
