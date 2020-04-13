<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warning extends Model
{
    protected $fillable = [
        'speedlimit','pathviolation','tanker1empty','tanker2empty','tanker3empty',
    ];
}
