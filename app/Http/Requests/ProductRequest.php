<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>[
                'required',
            ],
            'description'=>[
                'required','string',
            ],
            'price'=>[
                'required','between:0,99.99',
            ],
            'type'=>[
                'required','string',
            ],
        ];
    }
}
