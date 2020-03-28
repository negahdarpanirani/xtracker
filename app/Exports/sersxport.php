<?php

namespace App\Exports;

use App\user;
use Maatwebsite\Excel\Concerns\FromCollection;

class sersxport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::OrderBy('id','DESC')->get();
    }
}
