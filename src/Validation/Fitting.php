<?php

namespace Denngarr\Seat\Fitting\Validation;

use Illuminate\Foundation\Http\FormRequest;

class Fitting extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'eftfitting' => 'required'
        ];
    }
}