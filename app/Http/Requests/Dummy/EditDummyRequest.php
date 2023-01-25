<?php

namespace App\Http\Requests\Dummy;

use Illuminate\Foundation\Http\FormRequest;

class EditDummyRequest extends FormRequest
{
    public function rules(): array
    {
        $model_name = 'App\Models\\'. \Str::ucfirst(request()->get('model'));
        $customizable = $model_name::$customizable['edit'];
        $rules = [];
        dd(request()->all());
        foreach ($customizable['fields'] as $key => $field){
            if (array_key_exists('validation', $field)){
                $rules[$key] = $field['validation'];
            }else{
                $rules[$key] = 'nullable';

            }
        }
        return $rules;
    }

    public function authorize(): bool
    {
        return true;
    }
}
