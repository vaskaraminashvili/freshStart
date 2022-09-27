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
        // put everything acroding to methods
        'index' => [
//            this is the model used , after this will be transformed to upper and plural
            'model' => 'dummy',
            // here will be described fields one by one field will have several attribute to described it
            'fields' =>[
                'name' => [
                    'sortable' => true,
                    'filterable' => true,
//                    'type' => 'text' , // text can be default!!  there could be several and after added new types || text , number , money , status, switch
                ],
                'address' => [
                    'sortable' => true,
                    'filterable' => true,
                ],
                'email' => [
                    'sortable' => true,
                ],
                'amount' => [
                    'sortable' => true,
                    'type' => 'money' // type can be array and pass some things like PREFIX SUFFIX or other things  NEEDS TO BE CHECKED IF ARRAY
                ],
                'phone' => [
                    'type' => 'phone',
                    'typeProps' => [
                        'suffix' => '##',
                        'prefix' => '##asd'
                    ]
                ],
                'active' => [
                    'type' => 'status'
                ],
            ],



//            'fields' => [
//                // base on this field will displayed in table head and body
//                //this shoud be same as field names in DB
//                'name', 'address', 'email', 'amount', 'phone', 'status'
//            ],
//            'sortable' => [
//                'name'
//            ],
        ]
    ];

    protected $fillable = ['name', 'address', 'email', 'amount', 'phone', 'status'];

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
