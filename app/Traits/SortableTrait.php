<?php

namespace App\Traits;

use ArrayAccess;
use Illuminate\Http\Request;

/**
 * Sortable trait.
 */
trait SortableTrait
{
    public function getAllowedSort($field = 'sortable'){
        $method_name =request()->route()->getActionMethod();
        return collect(self::$customizable[$method_name][$field]);
    }

    public function scopeCustomSort($query){
        $sort = $this->getAllowedSort()->contains(function ($field){
            return $field == request('field') ? true :false;
        });

        if (request()->has(['field' , 'direction']) && $sort) {
            $query->orderBy(request('field'), request('direction'));
        }
    }

}
