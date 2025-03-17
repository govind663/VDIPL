<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurAsssociatesRequest extends FormRequest
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
                'associate_name' => 'required|string|max:255',
                'associate_image' => 'nullable|array', // Ensure it's an array
                'associate_image.*' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'associate_name' => 'required|string|max:255',
                'associate_image' => 'required|array', // Ensure it's an array
                'associate_image.*' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'associate_name.required' => 'Associate Name is required',
            'associate_name.string' => 'Associate Name must be a string',
            'associate_name.max' => 'Associate Name must be less than 255 characters',

            'associate_image.*.required' => 'Associate Image is required',
            'associate_image.*.mimes' => 'Associate Image must be a file of type: jpeg, png, jpg, webp',
            'associate_image.*.max' => 'Associate Image must be less than 2048 kilobytes',

            'status.required' => 'Status is required',
            'status.string' => 'Status must be a string',
            'status.max' => 'Status must be less than 255 characters',
        ];
    }
}
