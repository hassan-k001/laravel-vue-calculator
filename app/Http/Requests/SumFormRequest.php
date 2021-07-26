<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SumFormRequest extends FormRequest
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
            'number_1' => ['required','integer'],
            'number_2' => ['required','integer']
        ];
    }
}
