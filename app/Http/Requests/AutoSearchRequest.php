<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutoSearchRequest extends FormRequest
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
            'prezzo_min' => 'nullable|numeric|min:50',
            'prezzo_max' => 'nullable|numeric|min:' . $this -> input('prezzo_min'),
        ];
    }
}
