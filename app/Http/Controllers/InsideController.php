<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\User;
use App\Gallery;
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
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */  
    public function home()
    {
        $a = Auth::user()->idus;
        $user = User::find($a);
        return view('home', compact('user'));
    }

    public function updateprof($id)
    {   
        $user = User::find($id);   
        return View('updateprof', compact('user'));
    }

    public function updprofsuk(Request $request)
    {
        try
        {
        $id = $request->idus;
        $user = User::find($id);   
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nokontak = $request->nokontak;
        $user->save();

        return View('updprofsuk');
        }
        
        catch (Exception $h)
        {
            echo "Caught exception:   ". $h->getMessage(). "\n";
        }
    
    }

    public function mylisting()
    {
        $a = Auth::user()->idus;
        $user = User::find($a);
        $vendor = Vendor::with('user')->where('user_id', '=', $a)->get();
        return view('mylisting', compact('user', 'vendor'));
    }

    public function addlisting()
    {
        $a = Auth::user()->idus;
        $user = User::find($a);
        return view('addlisting', compact('user'));
    }

    public function savelist(Request $request)
    {
        $a = Auth::user()->idus;
        $user = User::find($a);
        try
        {
            $id = $request->idven;
            if($id <= 0)
            {
                $vendor = new Vendor;
                $gallery = new Gallery;
            }
            else
            {
                $vendor = Vendor::find($id);
            }
            
            $vendor->user_id = $a;
            $vendor->kota = $request->kota;
            $vendor->nama = $request->nama;
            $vendor->kategori = $request->kategori;
            $vendor->callemail = $request->callemail;
            $vendor->alamat = $request->alamat;
            $vendor->deskripsi = $request->deskripsi;
            $vendor->price = $request->price;
            $vendor->facebook = $request->facebook;
            $vendor->instagram = $request->instagram;
            $vendor->twitter = $request->twitter;
            $vendor->linkedin = $request->linkedin;
            $vendor->website = $request->website;
            $vendor->videourl = $request->videourl;
            // $vendor->pics = $request->pics;
            $file = $request->pics;
            $filename = $file->getClientOriginalName();

            if($request->hasFile('pics')) {
                Storage::disk('upload')->putFileAs('vendormain', $file, $filename);
                $vendor->pics = $filename;
                $vendor->save();
            }  
            $gallery->vendor_id = $vendor->idven;
            $gallery->galname = $request->galname;
            $gallery->save();            

            return view('savelist');
        }
        catch (Exception $e)
        {
            echo "Caught exception:   ". $e->getMessage(). "\n";
        }

    }

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
