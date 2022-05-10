<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
        $rules =
            [
            'ka.title' => '',
            'ka.name' => '',
            'ka.description' => '',
            'ka.address' => '',
            'start_time_text' => '',
            'end_time_text' => '',
            'phone' => '',
            'email' => '',
            'start_time' => '',
            'end_time' => '',
            ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = 'string';
            $rules[$locale . '.name'] = 'string';
            $rules[$locale . '.description'] = 'string';
            $rules[$locale . '.address'] = 'string';
            $rules[$locale . '.start_time_text'] = 'string';
            $rules[$locale . '.end_time_text'] = 'string';
        }

        return $rules;
    }
}
