<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tracker;
use App\user;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     return view('home');
    }

    public function admin()
    {
     return view('back.starter');
    }

    public function dashboard()
    {
    $track=tracker::orderby('id','DESC')->get();
    return view('back.dashboard',compact('track'));
    }

    public function speed(tracker $tracker)
    {
    return view('back.speed',compact('tracker'));
    }

    public function map()
    {
        $track=tracker::orderby('id','DESC')->get();
        return view('back.map',compact('track'));
    }


}
