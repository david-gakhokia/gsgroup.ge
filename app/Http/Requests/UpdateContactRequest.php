<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
                'phone' => 'required',
                'email' => '',
                'ka.address' => 'required',
                'image' => '',
                'status' => 'required',
            ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.address'] = 'string';
        }

        return $rules;
    }
}
