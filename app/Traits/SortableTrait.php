<?php

namespace App\Traits;

use ArrayAccess;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        // think to move this code inside trait or something esle
        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => Rule::in($this->getAllowedSort()), // this may come in future from the model
        ]);

        $sort = $this->getAllowedSort()->contains(function ($field){
            return $field == request('field') ? true :false;
        });


        if (request()->has(['field' , 'direction']) && $sort) {
            $query->orderBy(request('field'), request('direction'));
        }
    }

}
