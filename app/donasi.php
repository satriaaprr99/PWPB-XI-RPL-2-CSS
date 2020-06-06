<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    protected $table = 'donasi';
    protected $fillable = ['nama', 'tanggal', 'nominal', 'foto',];

    public function getFoto(){
    	if (!$this->foto) {
    		return asset('foto/default.png');
    	}
    	return asset('foto/' . $this->foto);
    }
}
