<?php

namespace App\Models;

use App\Traits\SearchableTrait;
use App\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dummy extends Model
{
    use SoftDeletes, SortableTrait, SearchableTrait;

//    maybe find better way sometimes
    public static $customizable = [
        'model' => 'dummy',
        'index' => [
            'fields' => [
                // base on this field will displayed in table head and body
                //this shoud be same as field names in DB
                'name', 'address', 'email', 'amount', 'phone', 'status'
            ],
            'sortable' => [
                'name'
            ],
        ]
    ];

    protected $fillable = ['name', 'address', 'email', 'amount', 'phone', 'status'];
}
