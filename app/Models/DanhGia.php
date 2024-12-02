<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'danh_gia';

    protected $fillable = [
        'user_id',
        'don_hang_id',
        'nuoc_hoa_id',
        'rating',
        'comment',
        'image',
        'video',
    ];

    // Liên kết với người dùng
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Liên kết với đơn hàng
    public function donHang()
    {
        return $this->belongsTo(DonHang::class);
    }

    // Liên kết với sản phẩm (nước hoa)
    public function nuocHoa()
    {
        return $this->belongsTo(NuocHoa::class);
    }
}
