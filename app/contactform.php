<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactform extends Model
{
    protected $fillable = [
        'name', 'email', 'subject','message',
    ];
}
