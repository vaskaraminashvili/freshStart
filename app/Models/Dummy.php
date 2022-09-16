<?php

namespace App\Models;

use App\Traits\SearchableTrait;
use App\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dummy extends Model
{
    use SoftDeletes,SortableTrait, SearchableTrait;

    protected $fillable = ['name' ,'address' ,'email' , 'amount' , 'phone' , 'status'];
}
