<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        DB::table('modules')->insert([
            'name' => fake()->name(),
            'structure' => json_encode([
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
//                'test_check' => [
//                    'fieldType' => 'check',
//    //                    'options' => [ // this is one way of passing data
//    //                        0 => 'it is not active',
//    //                        1 => 'yes yes it is active',
//    //                        2 => 'Et eos quia quia.',
//    //                        3 => 'Distinctio autem eum quisquam praesentium.',
//    //                        4 => 'Quaerat sed consequuntur optio sed.',
//    //                        5 => 'Odit voluptatum molestias eveniet et odio.',
//    //                    ],
//                    'fromModel' => [
//                        'model' => 'Status',
//                        'field' => 'name',
//                        'where' => [
//                            'column' => 'status',
//                            'operator' => '=',
//                            'value' => '1',
//                        ]
//                    ],
//                ],
//                'test_radio' => [
//                    'fieldType' => 'radio',
//                    //                    'options' => [ // this is one way of passing data
//                    //                        0 => 'it is not active',
//                    //                        1 => 'yes yes it is active',
//                    //                        2 => 'Et eos quia quia.',
//                    //                        3 => 'Distinctio autem eum quisquam praesentium.',
//                    //                        4 => 'Quaerat sed consequuntur optio sed.',
//                    //                        5 => 'Odit voluptatum molestias eveniet et odio.',
//                    //                    ],
//                    'fromModel' => [
//                        'model' => 'Status',
//                        'field' => 'name',
//                        'where' => [
//                            'column' => 'status',
//                            'operator' => '=',
//                            'value' => '1',
//                        ]
//                    ],
//                ],
                        'test_select' => [
                            'fieldType' => 'select',
                            //                    'options' => [ // this is one way of passing data
                            //                        0 => 'it is not active',
                            //                        1 => 'yes yes it is active',
                            //                        2 => 'Et eos quia quia.',
                            //                        3 => 'Distinctio autem eum quisquam praesentium.',
                            //                        4 => 'Quaerat sed consequuntur optio sed.',
                            //                        5 => 'Odit voluptatum molestias eveniet et odio.',
                            //                    ],
                            'fromModel' => [
                                'model' => 'Status',
                                'field' => 'name',
                                'where' => [
                                    'column' => 'status',
                                    'operator' => '=',
                                    'value' => '1',
                                ]
                            ],
                        ],

                    ]
                ]
            ]),
            'template' => 'default',
            'type' => 1,
            'managed' => 0,
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
