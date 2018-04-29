<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\Kodepos;
use Illuminate\Http\Request;
use View;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $a = $request->kategori;
        $b = $request->kota;

        $vendor = Vendor::with('user')
        ->where('kategori', 'like', '%'.$a.'%')
        ->where('kota', 'like', '%'.$b.'%')
        ->get();

        return View('filter', compact('vendor'));
    }

}