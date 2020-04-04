<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tracker;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function show(){
        $qry="SELECT lat,lng
        FROM trackers";
        $points = DB::select($qry);
        $a=response()->json($points);
        return $a;
    }
}
