<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrivacyPolicyRequest extends FormRequest
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
            ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = 'string';
            $rules[$locale . '.name'] = 'string';
            $rules[$locale . '.description'] = 'string';
        }

        return $rules;
    }
}
