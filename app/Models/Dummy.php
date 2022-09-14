<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dummy extends Model
{
    use SoftDeletes;

    protected $fillable = ['name' ,'address' ,'email' , 'amount' , 'phone' , 'status'];
}