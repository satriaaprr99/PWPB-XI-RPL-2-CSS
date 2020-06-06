<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\donasi;
use Auth;
use Alert;
use Carbon\Carbon;

class DonasiController extends Controller
{
    public function index(){
    	$data['donasi'] = \App\donasi::OrderBy('id')->get();
    	return view('donasi', $data);
    }
    public function create(){
    	return view('create.formDonasi');
    }
    public function store(Request $request){
    	$rule =[
    		'nama' => 'required|string',
    		'tanggal' => 'required|date',
    		'nominal' => 'required|integer',
    		'foto' => ''
    	];

    	$this->validate($request, $rule);
    	$input = $request->all();

    	$donasi = new \App\donasi;
        // $donasi->user_id = Auth::user()->id;
		$donasi->nama = $input['nama'];
		$donasi->tanggal = $input['tanggal'];
		$donasi->nominal = $input['nominal'];
		$donasi->foto = $input['foto'];
		$status = $donasi->save();

    	if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$donasi->foto = $request->file('foto')->getClientOriginalName();
		  	$donasi->save();
		  }  

        // $donasi = donasi::where('user_id', Auth::user()->id)->where('status',0)->first();
        // $donasi->terkumpul = $donasi->terkumpul+$donasi->nominal*$request->terkumpul;
        // $status = $donasi->update();


    	if ($status) {
    		return redirect('/donasi')->with('success', 'Data berhasil ditambahkan');
    	}else{
    		return redirect('/donasi/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function destroy(Request $request, $id){
    	$donasi = \App\donasi::find($id);
    	$status = $donasi->delete();

    	if ($status) {
    		return redirect('/donasi')->with('success', 'Data berhasil dihapus');
    	}else{
    		return redirect('/donasi/create')->with('error', 'Data gagal dihapus');
    	}
	}
}