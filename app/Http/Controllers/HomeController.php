<?php

namespace App\Http\Controllers;

use App\Humain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $deals = Humain::all();
        $date = date('Y-m-d H:i:s');
        return view('home',compact('deals','date'));
    }
}
