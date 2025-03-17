<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutStatisticsRequest extends FormRequest
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
                'name' => 'required|string|max:255',
                'statistics_value' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'statistics_value'=> 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'name.string'=> 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',

            'statistics_value.required' => 'The statistics value is required.',
            'statistics_value.string'=> 'The statistics value must be a string.',
            'statistics_value.max' => 'The statistics value may not be greater than 255 characters.',
        ];
    }
}
