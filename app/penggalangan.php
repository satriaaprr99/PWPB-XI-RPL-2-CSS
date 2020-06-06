<!--

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggalangan extends Model
{
    protected $table = 'penggalangan';
    protected $fillable = ['judul', 'foto', 'terkumpul', 'donatur'];

    public function getFoto(){
    	if (!$this->foto) {
    		return asset('foto/default.png');
    	}
    	return asset('foto/' . $this->foto);
    }
}
 -->