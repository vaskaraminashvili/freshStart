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
        $sortable = collect([]);
        collect(self::$customizable[$method_name]['fields'])->map(function ($item, $key) use ($field,$sortable){
            if (array_key_exists($field,$item)){
                $sortable->push($key);
            }
        });
        return $sortable;
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
