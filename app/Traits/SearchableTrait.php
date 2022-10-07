<?php

namespace App\Traits;

use Illuminate\Http\Request;

/**
 * Sortable trait.
 */
trait SearchableTrait
{

    public function scopeCustomSearch($query)
    {
        $request = request();

        if (request()->has('search')) {
            foreach ($request['search'] as $field => $value) {
                $query->where($field, 'LIKE', '%' . $value . '%');
            }
        }
    }
}
