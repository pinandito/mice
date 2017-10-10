<?php

namespace App\Http\Controllers;

use App\Magang;
use Illuminate\Http\Request;
use View;
use Auth;

class MagangController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        
        return view('website');
        // Loker (model)::all
        // di folder view, with loker table dan variabel $loker
        // $loker = Loker::get();
        // return view('home', ['loker' => $loker]);
    }
    
    public function showmag()
    {
        
    }

    public function crmag()
    {
        $magang = Magang::with('user')->get();
        return View('crmag', compact('magang'));
    }

    public function pcrmag()
    {
        return view('pcrmag');
    }

    public function magang()
    {
       $magang = Magang::where('mag_idp', '=', Auth::user()->id)->get();
       // return view('magang')->with('maginf', $magang);
       return View('magang', compact('magang'));
    }

    public function posmag()
    {
        return View::make('posmag');
    }

    public function updatemag($id)
    {
        $magang = Magang::find($id);
        return View('updatemag', compact('magang'));
    }

    public function delmag($id)
    {
        $magang = Magang::find($id);
        $magang->delete();
        return view('delsukses');
    }

    public function savemag(Request $request)
    {
        try
        {
            $id = $request->idmag;
            if($id <= 0)
            {
                $magang = new Magang;
            }
            else
            {
                $magang = Magang::find($id);
            }
            $magang->mag_idp = $request->mag_idp;
            $magang->magnama = $request->magnama;
            $magang->maglok = $request->maglok;
            $magang->magdesk = $request->magdesk;
            $magang->save();

            return view('updatepsukses');
        }
        catch (Exception $e)
        {
            echo "Caught exception:   ". $e->getMessage(). "\n";
        }
   
    }
}
