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
        $customizable = collect(self::$customizable);
        if (request()->has('search')) {
            foreach ($request['search'] as $field => $value) {
                $condition = $customizable->pluck('fields.' . $field . '.filterProps.condition')->first() ?? '';
                $this->determineCondition($field, $condition, $value, $query);
            }
        }
    }

    /**
     * @param $field
     * @param string $condition
     * @param $value
     * @param $query
     * @return void
     */
    public function determineCondition($field, string $condition = 'contains', $value, $query): void
    {
        if (!empty($condition)) {

            $scope = 'where' . Str::ucfirst($condition);
//            dd($scope);
            $query->$scope($field, $value);
        } else {
            $query->where($field, 'LIKE', '%' . $value . '%');

        }
            $query->whereRelationEqual();

//        dd($query->toSql());


    }


}
