<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hang'; // Tên bảng
    protected $fillable = [
        'user_id',
        'maDonHang',
        'tenKhachHang',
        'tenDonHang',
        'hinhThucMua',
        'ngayDatHang',
        'tongTien',
        'soLuong',
        'trangThai',
        'ghiChu',
    ];

    // Quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với chi tiết đơn hàng (nếu có bảng chi tiết)
    // public function chiTietDonHang()
    // {
    //     return $this->hasMany(ChiTietDonHang::class);
    // }
}
