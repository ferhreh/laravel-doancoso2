<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChinhSachController extends Controller
{
    public function KiemHang()
    {
        return view('chinhsach.kiemHang');
    }
    public function baoMat()
    {
        return view('chinhsach.baoMat');
    }
    public function vanChuyen()
    {
        return view('chinhsach.vanChuyen');
    }
    public function khieuNai()
    {
        return view('chinhsach.khieuNai');
    }
    public function thanhToan()
    {
        return view('chinhsach.thanhToan');
    }
    public function baoHanh()
    {
        return view('chinhsach.baoHanh');
    }
}
