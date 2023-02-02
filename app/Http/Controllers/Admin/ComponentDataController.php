<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentDataController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required',
            'field' => 'required',
            'where' => 'sometimes|array:column,operator,value',
        ]);
//    $column, $operator = null, $value = null,
        $model_name = 'App\Models\\' . \Str::ucfirst($validated['model']);
        $data = $model_name::query()
            ->when($validated['where'], function ($query) use ($validated) {
                return $query->where($validated['where']['column'], $validated['where']['operator'], $validated['where']['value']);
            })
            ->orderBy('id')
            ->get()
            ->pluck($validated['field'], 'id');

        return $data;
    }
}
