<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutoRequest extends FormRequest
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
            'marca' => 'required|min:2|max:200',
            'modello' => 'required|min:2',
            'numero_posti' => 'required|integer|min:2',
            'targa' => 'required|min:7|max:7',
            'allestimento' => 'required|min:5|max:50',
            'data_inizio' => 'required|date|size:10',
            'data_fine' => 'required|date|size:10', 
            'prezzo_n_g' => 'required|integer|min:0',
        ];
    }
}
