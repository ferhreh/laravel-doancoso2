<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NuocHoa;
class ChinhSachController extends Controller
{
    public function KiemHang()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.kiemHang', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function baoMat()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.baoMat', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function vanChuyen()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.vanChuyen', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function khieuNai()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.khieuNai', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function thanhToan()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.thanhToan', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function baoHanh()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('chinhsach.baoHanh', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
}
