<?php

namespace App\Traits;

use ArrayAccess;
use Illuminate\Http\Request;

/**
 * Sortable trait.
 */
trait SortableTrait
{

    public function scopeCustomSort($query){
        if (request()->has(['field' , 'direction'])) {
            $query->orderBy(request('field'), request('direction'));
        }
    }

}
