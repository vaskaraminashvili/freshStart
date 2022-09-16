<?php

namespace App\Traits;

use Illuminate\Http\Request;

/**
 * Sortable trait.
 */
trait SearchableTrait
{

    public function scopeCustomSearch($query){
        if (request()->has('search')) {
            $query->where('name', 'LIKE', '%'.request('search').'%');
        }
    }
}
