<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;
use DB;
use App\Vendor;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        return view('blog');
    }

    public function listing()
    {
        $vendor = Vendor::with('user')->get();
        return view('listing', compact('vendor'));
    }

    public function home()
    {
        return view('home');
    }
}
