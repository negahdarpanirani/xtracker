<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $track=account::orderby('id','DESC')->get();
        return view('back.account',compact('track'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
            $pagetitle1='حساب داری';
            return view('create',compact('pagetitle1'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account= new account([
            'buyamount'=>$request->get('buyamount'),
            'selamount'=>$request->get('selamount'),
            'selamount2'=>$request->get('selamount2'),
            'model'=>$request->get('model'),
            'number'=>$request->get('number'),
            'cedertype'=>$request->get('cedertype'),
            'dayrate'=>$request->get('dayrate'),
            'price'=>$request->get('price'),
           
            
        ]);
        $account-> save();
      
        return redirect(route('account')) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function acdestroy(account $account)
    {
        $account->delete();
        return redirect(route('account'));
    }
}
