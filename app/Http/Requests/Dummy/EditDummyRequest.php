<?php

namespace App\Http\Requests\Dummy;

use App\Models\Dummy;
use Illuminate\Foundation\Http\FormRequest;

class EditDummyRequest extends FormRequest
{
    public function rules(): array
    {
        $model_name = 'App\Models\\'. \Str::ucfirst(request()->get('model'));
        $customizable = $model_name::$customizable['edit'];
        dd($customizable);
        dd(request()->all());
        return [
            'name'=> 'required|min:3',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
