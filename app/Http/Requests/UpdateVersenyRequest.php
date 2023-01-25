<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVersenyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'vkod' => 'string|max:3|min:3'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
   public function messages()
    {
        return [
            'vkod.required' => 'Nincs vkod mező',
            'vkod.string' => 'Vkod mező értéke legyen szöveges',
            'vkod.max' => 'Túl sok karakter',
            'vkod.min' => 'Túl kevés karakter',
        ];
    }
}
