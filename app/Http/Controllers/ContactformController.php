<?php

namespace App\Http\Controllers;

use App\contactform;
use Illuminate\Http\Request;

class ContactformController extends Controller
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
    public function store(Request $request)
    {        

        
        $contact= new contactform([
            
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'message'=>$request->get('message'),
        ]);
        $contact-> save();
          return Redirect::back()->with('message','Operation Successful !');
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\contactform  $contactform
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contactform  $contactform
     * @return \Illuminate\Http\Response
     */
    public function edit(contactform $contactform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contactform  $contactform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactform $contactform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contactform  $contactform
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactform $contactform)
    {
        //
    }
}
