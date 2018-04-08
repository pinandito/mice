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
        $vendora1 = Vendor::with('user')
        ->where('spetheme', 'like', '%bday%')
        ->where('kategori', 'like', '%eo%')
        ->get();
        
        $vendorb1 = Vendor::with('user')
        ->where('spetheme', 'like', '%corp%')
        ->where('kategori', 'like', '%eo%')
        ->get();

        $vendorc1 = Vendor::with('user')
        ->where('spetheme', 'like', '%studyt%')
        ->where('kategori', 'like', '%eo%')
        ->get();
        
        $vendord1 = Vendor::with('user')
        ->where('spetheme', 'like', '%seminar%')
        ->where('kategori', 'like', '%eo%')
        ->get();
        
        $vendore1 = Vendor::with('user')
        ->where('spetheme', 'like', '%pernikahan%')
        ->where('kategori', 'like', '%eo%')
        ->get();
        
        $vendora2 = Vendor::with('user')
        ->where('spetheme', 'like', '%bday%')
        ->where('kategori', 'like', '%catering%')
        ->get();
        
        $vendorb2 = Vendor::with('user')
        ->where('spetheme', 'like', '%corp%')
        ->where('kategori', 'like', '%catering%')
        ->get();

        $vendorc2 = Vendor::with('user')
        ->where('spetheme', 'like', '%studyt%')
        ->where('kategori', 'like', '%catering%')
        ->get();
        
        $vendord2 = Vendor::with('user')
        ->where('spetheme', 'like', '%seminar%')
        ->where('kategori', 'like', '%catering%')
        ->get();
        
        $vendore2 = Vendor::with('user')
        ->where('spetheme', 'like', '%pernikahan%')
        ->where('kategori', 'like', '%catering%')
        ->get();

        $vendora3 = Vendor::with('user')
        ->where('spetheme', 'like', '%bday%')
        ->where('kategori', 'like', '%venue%')
        ->get();
        
        $vendorb3 = Vendor::with('user')
        ->where('spetheme', 'like', '%corp%')
        ->where('kategori', 'like', '%venue%')
        ->get();

        $vendorc3 = Vendor::with('user')
        ->where('spetheme', 'like', '%studyt%')
        ->where('kategori', 'like', '%venue%')
        ->get();
        
        $vendord3 = Vendor::with('user')
        ->where('spetheme', 'like', '%seminar%')
        ->where('kategori', 'like', '%venue%')
        ->get();
        
        $vendore3 = Vendor::with('user')
        ->where('spetheme', 'like', '%pernikahan%')
        ->where('kategori', 'like', '%venue%')
        ->get();

        $vendora4 = Vendor::with('user')
        ->where('spetheme', 'like', '%bday%')
        ->where('kategori', 'like', '%decorator%')
        ->get();
        
        $vendorb4 = Vendor::with('user')
        ->where('spetheme', 'like', '%corp%')
        ->where('kategori', 'like', '%decorator%')
        ->get();

        $vendorc4 = Vendor::with('user')
        ->where('spetheme', 'like', '%studyt%')
        ->where('kategori', 'like', '%decorator%')
        ->get();
        
        $vendord4 = Vendor::with('user')
        ->where('spetheme', 'like', '%seminar%')
        ->where('kategori', 'like', '%decorator%')
        ->get();
        
        $vendore4 = Vendor::with('user')
        ->where('spetheme', 'like', '%pernikahan%')
        ->where('kategori', 'like', '%decorator%')
        ->get();

        $vendora5 = Vendor::with('user')
        ->where('spetheme', 'like', '%bday%')
        ->where('kategori', 'like', '%extra%')
        ->get();
        
        $vendorb5 = Vendor::with('user')
        ->where('spetheme', 'like', '%corp%')
        ->where('kategori', 'like', '%extra%')
        ->get();

        $vendorc5 = Vendor::with('user')
        ->where('spetheme', 'like', '%studyt%')
        ->where('kategori', 'like', '%extra%')
        ->get();
        
        $vendord5 = Vendor::with('user')
        ->where('spetheme', 'like', '%seminar%')
        ->where('kategori', 'like', '%extra%')
        ->get();
        
        $vendore5 = Vendor::with('user')
        ->where('spetheme', 'like', '%pernikahan%')
        ->where('kategori', 'like', '%extra%')
        ->get();

        return view('index', compact('vendora1', 'vendorb1', 'vendorc1', 'vendord1', 'vendore1', 'vendora2', 'vendorb2', 'vendorc2', 'vendord2', 'vendore2', 'vendora3', 'vendorb3', 'vendorc3', 'vendord3', 'vendore3', 'vendora4', 'vendorb4', 'vendorc4' ,'vendord4', 'vendore4', 'vendora5', 'vendorb5', 'vendorc5', 'vendord5', 'vendore5'));
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
        $vendorven = Vendor::with('user')->where('user_id', '=', Auth::user()->idus)
        ->where('kategori', '=', 'venue')->get();
        $vendorex = Vendor::with('user')->where('user_id', '=', Auth::user()->idus)
        ->where('kategori', '=', 'extra')->get();
        $vendordeco = Vendor::with('user')->where('user_id', '=', Auth::user()->idus)
        ->where('kategori', '=', 'decorator')->get();
        $vendoreo = Vendor::with('user')->where('user_id', '=', Auth::user()->idus)
        ->where('kategori', '=', 'eo')->get();
        $vendorcat = Vendor::with('user')->where('user_id', '=', Auth::user()->idus)
        ->where('kategori', '=', 'catering')->get();

        return view('home', compact('vendorven', 'vendorex', 'vendordeco', 'vendoreo', 'vendorcat'));
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
