<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$data['barangs'] = DB::table('barangs')->get();
    	return view('admin.index', $data);
    }

    public function tambah(Request $request){

    	$rule = [
            'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required',
            'gambar' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        unset($input['_token']);
        $status = \DB::table('barangs')->insert($input);

        if ($status) {
            return redirect('/admin')->with('success','Data Berhasil ditambahkan');
        } else {
            return redirect('/admin/tambah')->with('error', 'Data Gagal Ditambahkan');
        }
    	
    	return $request->all();
    }

    public function edit($id){
    	$data['barangs'] = \DB::table('barangs')->find($id);
        return view('admin.edit', $data);
    }

    public function hapus(){
    	$data['barangs'] = DB::table('barangs')->get();
    	return view('admin.index', $data);
    }
}
