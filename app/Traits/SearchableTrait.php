<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Sortable trait.
 */
trait SearchableTrait
{

    /**
     * @param $query
     * @return void
     */
    public function scopeCustomSearch($query): void
    {
        $request = request();
        if (request()->has('search')) {
            foreach ($request['search'] as $field => $value) {
                $this->determineCondition($field, $value, $query);
            }
        }
    }

    /**
     * @param $field
     * @param $value
     * @param $query
     * @return void
     */
    public function determineCondition($field, $value, $query): void
    {
        $customizable = collect(self::$customizable);
        $filterProps = $customizable->pluck('fields.' . $field . '.filterProps')->first() ?? '';
        $condition = $customizable->pluck('fields.' . $field . '.filterProps.condition')->first() ?? '';

        if (!empty($condition)) {
            $scope = 'where' . Str::ucfirst($condition);
            $query->$scope($field, $value);
        } elseif (!empty($filterProps) && array_key_exists('relation', $filterProps)) {
            $condition = $filterProps['relation']['condition'];
            $scope = 'whereRelation' . Str::ucfirst($condition);
            $query->$scope($field, $value);

        } else {
            $query->where($field, 'LIKE', '%' . $value . '%');

        }

    }


}
