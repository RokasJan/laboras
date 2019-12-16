<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerforservice extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'data' => 'required',
            'vieta' => 'required|max:255',
            'priezastis' => 'required|max:255',
        ];
    }
}
