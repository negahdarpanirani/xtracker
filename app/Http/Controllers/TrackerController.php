<?php

namespace App\Http\Controllers;

use App\tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $track=tracker::orderby('id','DESC')->get();
        return view('back.starter',compact('track'));

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function show(tracker $tracker)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function edit(tracker $tracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tracker $tracker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(tracker $tracker)
    {
        return $traker;
        $tracker-> delete();
        $msg='دسته بندی با موفقیت حذف شد';
        return redirect(route('admin')) ;
    }
}
