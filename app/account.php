<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable = [
        'buyamount','selamount','selamount2','model','number','cedertype','dayrate','price',
    ];
}
