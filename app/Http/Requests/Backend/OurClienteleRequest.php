<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurClienteleRequest extends FormRequest
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
                'clientele_name' => 'required|string|max:255',
                'clientele_image' => 'nullable|array', // Ensure it's an array
                'clientele_image.*' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'clientele_name' => 'required|string|max:255',
                'clientele_image' => 'required|array', // Ensure it's an array
                'clientele_image.*' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
                'status' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'clientele_name.required' => 'Clientele Name is required',
            'clientele_name.max' => 'Clientele Name must not be greater than 255 characters',
            'clientele_name.string' => 'Clientele Name must be a string',

            'clientele_image.*.required' => 'Clientele Image is required',
            'clientele_image.*.mimes' => 'Clientele Image must be a file of type: jpeg, png, jpg, webp',
            'clientele_image.*.max' => 'Clientele Image must not be greater than 2048 kilobytes',

            'status.required' => 'Status is required',
            'status.string' => 'Status must be a string',
            'status.max' => 'Status must not be greater than 255 characters',
        ];
    }
}
