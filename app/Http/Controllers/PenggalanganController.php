<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggalanganController extends Controller
{
    public function index(){
    	$data['penggalangan'] = \App\penggalangan::OrderBy('judul')->get();
    	return view('penggalangan', $data);
    }
    public function create(){
    	return view('create.formPenggalangan');
    }
    public function store(Request $request){
    	$rule =[
    		'judul' => 'required|string',
    		'foto' => '',
    		'terkumpul' => 'required|integer',
    		'donatur' => 'required|integer'
    	];

    	$this->validate($request, $rule);
    	$input = $request->all();

    	$penggalangan = new \App\penggalangan;
		$penggalangan->judul = $input['judul'];
		$penggalangan->foto = $input['foto'];
		$penggalangan->terkumpul = $input['terkumpul'];
		$penggalangan->donatur = $input['donatur'];
		$status = $penggalangan->save();

    	if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$penggalangan->foto = $request->file('foto')->getClientOriginalName();
		  	$penggalangan->save();
		  }  

    	if ($status) {
    		return redirect('/penggalangan')->with('success', 'Data berhasil ditambahkan');
    	}else{
    		return redirect('/penggalangan/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function destroy(Request $request, $id){
    	$penggalangan = \App\penggalangan::find($id);
    	$status = $penggalangan->delete();

    	if ($status) {
    		return redirect('/penggalangan')->with('success', 'Data berhasil dihapus');
    	}else{
    		return redirect('/penggalangan/create')->with('error', 'Data gagal dihapus');
    	}
	}
}
 -->