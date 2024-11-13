<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'name','product_id', 'quantity','image','giaTienLon','giaTienNho','dungTichNho','dungTich'];

    public function product()
    {
        return $this->belongsTo(NuocHoa::class);
    }
}
