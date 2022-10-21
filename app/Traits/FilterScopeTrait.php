<?php

namespace App\Traits;


/**
 * FilterScopeTrait trait.
 */
trait FilterScopeTrait
{

    /**
     * @param $query
     * @param $field
     * @param $value
     * @return void
     */
    public function scopeWhereContains($query, $field, $value): void
    {
        $query->where($field, 'LIKE', '%' . $value . '%');
    }


    /**
     * @param $query
     * @param $field
     * @param $value
     * @return void
     */
    public function scopeWhereEqual($query, $field, $value): void
    {
        $query->where($field, $value);
    }


    /**
     * @param $query
     * @return void
     */
    public function scopeWhereRelationEqual($query): void
    {
        $query->where('status_id', 2);
    }

}
