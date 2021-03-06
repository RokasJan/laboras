<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pridetiSkunda extends FormRequest
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
            'priezastis' => 'required|min:3|max:3000',
            'informacija' => 'required|min:3|max:3000',
        ];
    }
}
