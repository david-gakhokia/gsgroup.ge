<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        $rules = [
            'en.name' => 'required',
            'en.position' => '',
            'en.description' => '',
            'phone' => '',
            'email' => '',
            'facebook' => '',
            'instagram' => '',
            'linkedin' => '',
            'status' => 'required',
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.name'] = 'string';
            $rules[$locale . '.position'] = 'string';
            $rules[$locale . '.description'] = 'string';
        }

        return $rules;
    }
}
