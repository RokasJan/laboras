<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newautoadd extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'marke' => 'required|max:255',
            'modelis' => 'required|max:255',
            'pagaminimo_data' => 'required|max:255',
            'vietu_skaicius' => 'required|max:255',
            'pozymis' => 'required|max:255',
        ];
    }
}
