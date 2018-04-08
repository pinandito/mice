<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;

class InsideController extends Controller
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
    public function updateven($id)
    {
        $vendor = Vendor::find($id);
        return view('updateven', compact('vendor'));
    }

    public function saveupdven(Request $request)
    {
        try
        {
            $id = $request->idven;
            if($id <= 0)
            {
                $vendor = new Vendor;
            }
            else
            {
                $vendor = Vendor::find($id);
            }
            
            $vendor->user_id = Auth::user()->idus;
            $vendor->kategori = $request->kategori;
            $vendor->nama = $request->nama;
            $vendor->kota = $request->kota;
            $vendor->alamat = $request->alamat;
            $vendor->nokontak = $request->nokontak;
            $vendor->nokontak2 = $request->nokontak2;
            $vendor->deskripsi = $request->deskripsi;
            $vendor->price = $request->harga;
            $vendor->compro = $request->compro;
            $vendor->save();

            return View('updatesukses');
        }
        catch (Exception $e)
        {
            echo "Caught exception:   ". $e->getMessage(). "\n";
        }
        
    }

    public function delven($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();

        return View('delsukses');
    }

    public function addven()
    {
        return View('addven');
    }
    
}
