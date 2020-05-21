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
            return redirect('/admin')->with('success','Data Berhasil Ditambahkan');
        } else {
            return redirect('/admin/tambah')->with('error', 'Data Gagal Ditambahkan');
        }
    	
    	return $request->all();
    }

    public function edit($id){
    	$data['barangs'] = \DB::table('barangs')->find($id);
        return view('admin.edit', $data);
    }

    public function update(Request $request,$id){
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
        unset($input['_method']);

        $status = \DB::table('barangs')->where('id', $id)->update($input);

        if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Diupdate');
        } else {
            return redirect('/siswa/{id}/edit')->with('error', 'Data Gagal Diupdate');
        }
    }

    public function hapus(Request $request, $id){
    	 $status = \DB::table('barangs')->where('id', $id)->delete();

    	 if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Dihapus');
        } else {
            return redirect('/admin')->with('error', 'Data Gagal Dihapus');
        }
    }
}
