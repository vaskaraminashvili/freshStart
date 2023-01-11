<?php

namespace App\Models;

use App\Traits\FilterScopeTrait;
use App\Traits\ListRelationsTrait;
use App\Traits\SearchableTrait;
use App\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dummy extends Model
{
    use SoftDeletes, SortableTrait, SearchableTrait, FilterScopeTrait, ListRelationsTrait;

//    maybe find better way sometimes
    public static array $customizable = [
        // put everything acroding to methods
        'index' => [
//            this is the model used , after this will be transformed to upper and plural
            'model' => 'dummy',
            // here will be described fields one by one field will have several attribute to described it
            'fields' => [
                'name' => [
                    'sortable' => true,
                    'filterable' => true,
                ],
                'article' => [
                    'sortable' => true,
                    'filterable' => true,
                    'filterProps' => [
                        'relation' => [
                            'type' => 'hasMany',
                            'name' => 'title',
                        ]
                    ]
//                    'type' => 'text' , // text can be default!!  there could be several and after added new types || text , number , money , status, switch
                ],
//                'address' => [
//                    'sortable' => true,
//                    'filterable' => true,
////                    'filtertype' => 'default',
////                    'filterProps' => [
////                        'contains' => 'equal' // contains => LIKE '%EXAMPLE%' , equal => =
////                    ]
//                ],

//                'email' => [
//                    'sortable' => true,
//                ],
                'amount' => [
                    'sortable' => true,
                    'fieldType' => 'money', // type can be array and pass some things like PREFIX SUFFIX or other things  NEEDS TO BE CHECKED IF ARRAY
                    'filterable' => true,
                    'filterProps' => [
                        'condition' => 'equal' // contains => LIKE '%EXAMPLE%' , equal => =
                    ]
                ],
//                'phone' => [
//                    'fieldType' => 'phone',
//                    'typeProps' => [
//                        'suffix' => '##',
//                        'prefix' => '##asd'
//                    ]
//                ],
                'status' => [
                    'fieldType' => 'status',
                    'filterable' => true,
                    'filtertype' => 'select',
                    'filterProps' => [
                        'relation' => [
                            'type' => 'belongsTo',
                            'name' => 'status',
                            'condition' => 'equal'
                        ]
                    ]
                ],
                'active' => [
                    'fieldType' => 'active' // maybe switch active field type to SWITCH button in future and update it in background and send toast
                ],
            ],


        ],
        'edit' => [
            'model' => 'dummy',
            'fields' => [
                'name' => [
                    'validation' => 'required|min:15',
                ],

                'email' => [
                    'validation' => 'required|email',
                ],
                'phone' => [
                    'validation' => 'required',
                ],
                'address' => [
                    'fieldType' => 'editor',
                    'validation' => 'required|min:15',
                ],

            ]
        ]
    ];
//    $customizable this is the variable that customizes model differant actions for start we have index
//    $customizable is created key named index
//    that index have 2 key model name and fields
//    fields itself contain different fields and there description for index(table) function
//    field have different attributes such as fieldType, typeProps, sortable, filterable
//    sortable|noncompulsory (default false), allows to sort table by column
//    fieldType|noncompulsory(have default value) describes how that column will look like there are pre built components for every field type and can be added new types and components
//    typeProps|noncompulsory this will pass additional info or anything needed for custom field component. exm. suffix or prefix or money format or date format
//    filterable|noncompulsory(default false) , if set to true new field will be shown above table
//    filtertype|noncompulsory(have default value) describes how that field will look like there are pre built components for every field type and can be added new types and components
//    filterProps|noncompulsory this will pass adition data for filtering example instead of default `LIKE` for filtering can be passed greater then and others

    protected $fillable = ['name', 'address', 'email', 'amount', 'phone', 'status'];

    /**
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }


    /**
     * @return HasOne
     */
    public function latestArticle(): HasOne
    {
        return $this->hasOne(Article::class)->latest();
    }
}
