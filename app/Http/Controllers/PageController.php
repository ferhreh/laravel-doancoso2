<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NuocHoa;

class PageController extends Controller
{
    public function form()
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
        return view('form', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }

    public function about()
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
        return view('about', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }

    public function brands()
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
        return view('brands', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }

    public function perfumes()
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
        return view('perfumes', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
    public function contact()
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
        return view('contact', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
    }
}
