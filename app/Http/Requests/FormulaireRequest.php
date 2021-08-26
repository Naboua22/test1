<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireRequest extends FormRequest
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
        return [
            //
            'firstname' => 'required|max:70|min:3',
            'lastname' => 'required|max:30|min:2',
            'email' => 'required|email',
            'phone'=> 'required|numeric',
            'date' => 'required|date',
            "profession" => 'required|min:2|max:50'
            
        ];
    }
}
