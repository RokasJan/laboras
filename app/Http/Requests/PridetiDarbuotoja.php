<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PridetiDarbuotoja extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pastas' => 'required|max:255',
        ];
    }
}
