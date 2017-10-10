<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        return view('home');
    }

    public function savep(Request $request)
    {
        $id = $request->id;
        $users = User::find($id);
        $users->namalengkap = $request->namalengkap;
        $users->email = $request->email;
        $users->tglhr = $request->tglhr;
        $users->alamlok = $request->alamlok;
        $users->pendter = $request->pendter;
        $users->jurus = $request->jurus;
        $users->institusi = $request->institusi;
        $users->gamb = $request->gamb;
        $users->foto = $request->foto;
        $users->telp = $request->telp;
        $users->telpa = $request->telpa;
        $users->resume = $request->resume;
        $users->save();

        return view('updatepsukses');
    }

    public function updatep($id)
    {
        return view('updatep');
    }

}
