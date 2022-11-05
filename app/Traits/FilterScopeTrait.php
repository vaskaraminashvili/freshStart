<?php

namespace App\Traits;


use Illuminate\Contracts\Database\Eloquent\Builder;

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
     * @param $field
     * @param $value
     * @return void
     */
    public function scopeWhereRelationEqual($query, $field, $value): void
    {
        $query->where($field.'_id', $value);
    }

    public function scopeWhereRelationHasManyContains($query, $field, $value){
        $query->whereHas('articles', function (Builder $query) use($field,$value){
            $query->where($field, 'like','%'.$value.'%');
        });
    }

}
