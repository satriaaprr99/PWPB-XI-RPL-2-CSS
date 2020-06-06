<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index(){
    	// $data['berita'] = \DB::table('berita')->get();
    	// return view('berita', $data);

    	$data['berita'] = \App\Berita::OrderBy('judul')->get();
    	return view('berita', $data);
    }

    public function create(){
    	return view('create.formBerita');
    }
    public function store(Request $request){
    	$rule =[
    		'judul' => 'required|string',
    		'deskripsi' => 'required|string',
    		'foto' => 'required'
    	];

    	$this->validate($request, $rule);

    	$input = $request->all();
    	// unset($input['_token']);

		// $status = \DB::table('berita')->insert($input);

		// $status = \App\Berita::create($input);

		$berita = new \App\Berita;
        $berita->judul = $input['judul'];
        $berita->deskripsi = $input['deskripsi'];
        $berita->foto = $input['foto'];
        $status = $berita->save();

		if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$berita->foto = $request->file('foto')->getClientOriginalName();
		  	$berita->save();
		  }  


		if ($status) {
			return redirect('/berita')->with('success', 'Data Berhasil Ditambahkan');
		}else{
			return redirect('/berita/create')->with('error', 'Data gagal Ditambahkan');
		}	
    }

    public function edit(Request $request, $id){
    	$data['berita'] = \DB::table('berita')->find($id);
    	return view('create.formBerita', $data);
    }
    public function update(Request $request, $id){
    	$rule =[
    		'judul' => 'required|string',
    		'deskripsi' => 'required|string',
    		'foto' => 'required'
    	];

    	$this->validate($request, $rule);

    	$input = $request->all();
    	// unset($input['_token']);
    	// unset($input['_method']);

    	// $status = \DB::table('berita')->where('id', $id)->update($input);

    	$berita = \App\Berita::find($id);
    	// $status = $berita->update($input);
    	$berita->judul = $input['judul'];
		$berita->deskripsi = $input['deskripsi'];
		$berita->foto = $input['foto'];
		$status = $berita->save(); 

		if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$berita->foto = $request->file('foto')->getClientOriginalName();
		  	$berita->save();
		  }  

		if ($status) {
			return redirect('/berita')->with('success', 'Data Berhasil Diubah');
		}else{
			return redirect('/berita/create')->with('error', 'Data gagal Diubah');
		}	
    }
    // public function destroy(){
    // 	$berita = \App\Berita::find($id);
    // 	$status = $berita->delete();

    // 	if ($status) {
    // 		return redirect('/berita')->with('success', 'Data Berhasil Dihapus');
    // 	}else{
    // 		return redirect('/berita/create')->with('error', 'Data Gagal Ditambahkan');
    // 	}
    // }
}
