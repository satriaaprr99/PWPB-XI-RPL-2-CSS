<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\barang;

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
    public function index(){        
        $barangs = barang::paginate(20);
        return view('home', compact('barangs'));
    }

    public function toko(){        
        $barangs = barang::paginate(20);
        return view('toko', compact('barangs'));
    }

    public function korona(){
        $suspects = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        return view('korona', compact('suspects'));
    }
}
