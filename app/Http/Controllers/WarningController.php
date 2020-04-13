<?php

namespace App\Http\Controllers;

use App\warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // add speed limit selected to db
    public function speedlimit(Request $request)
    { 
        $speed=new warning([
            'speedlimit'=> $request->get('speedlimit')
            ]);
            $speed-> save();
            return redirect(route('map')) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function show(warning $warning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function edit(warning $warning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warning $warning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function destroy(warning $warning)
    {
        //
    }
}
