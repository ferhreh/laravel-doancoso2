<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachDaMua extends Model
{
    use HasFactory;
    // Định nghĩa tên bảng (nếu tên bảng không theo chuẩn Laravel)
    protected $table = 'khach_da_mua';

    // Các thuộc tính có thể gán giá trị hàng loạt
    protected $fillable = [
        'khachHangID',
        'name',
        'ghiChu',
        'hinhThuc',
        'tongTien',
    ];

    /**
     * Định nghĩa mối quan hệ với bảng khach_hang
     */
    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'khachHangID');
    }
}
