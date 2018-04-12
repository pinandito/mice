<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
     public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    
    public function profilev($id)
    {
        return view('profilev');
    }

    public function how()
    {
        return view('how');
    }

    public function cari()
    {
        $vendor = Vendor::all();
        return view('cari', compact('vendor'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function home()
    {
        return view('home');
    }

    public function summary()
    {
        return view('summary');
    }

    public function bride()
    {
        return view('bride');
    }
}
