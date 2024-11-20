<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoTaNuocHoa extends Model
{
    use HasFactory;
    protected $table = 'mo_ta'; 
    protected $fillable = ['nuoc_hoa_id', 'noi_dung'];

    public function nuocHoa()
    {
        return $this->belongsTo(NuocHoa::class, 'nuoc_hoa_id');
    }
}