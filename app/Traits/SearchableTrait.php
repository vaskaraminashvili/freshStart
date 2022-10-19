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
        $customizable = collect(self::$customizable);

        if (request()->has('search')) {
            foreach ($request['search'] as $field => $value) {
                $condition = $customizable->pluck('fields.' . $field . '.filterProps.condition')->first();
                $this->determineCondition($field, $condition, $value, $query);
            }
        }
    }

    /**
     * @param $field
     * @param string $condition
     * @param $value
     * @param $query
     * @return mixed|void
     */
    public function determineCondition($field, string $condition = 'contains', $value, $query)
    {
        if ($condition == 'contains') {
            return $query->where($field, 'LIKE', '%' . $value . '%');
        } elseif ($condition == 'equal') {
            return $query->where($field, $value);
        } else {
            return $query->where($field, 'LIKE', '%' . $value . '%');
        }
    }

}
