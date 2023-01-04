<?php

namespace App\Http\Requests\Dummy;

use Illuminate\Foundation\Http\FormRequest;

class StoreDummyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'=> 'required|min:3',
            'email'=>'required|email'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
