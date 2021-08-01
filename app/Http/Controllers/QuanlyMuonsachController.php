<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Muontra;
use App\Models\Sach;
use App\Models\User;
use App\Models\DanhmucSach;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuanlyMuonsachController extends Controller
{
    public function index() {

        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id','muontra.id_Muontra', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();
        return view('admin.quanlymuonsach.index')->with(compact('muon','danhmuc'));
    }

    public function dongy(Request $request)
    {
        $id_Muontra = $request ->id_Muontra;
        $muonsach = Muontra::find($id_Muontra);
        $muonsach->tinhtrang = 'Đồng ý';
        $muonsach->save();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();
        return redirect()->back()->with('status','Bạn đã đồng ý cho mượn quyển sách này');    
    }

    public function tuchoi(Request $request)
    {
        $id_Muontra = $request ->id_Muontra;
        $muonsach = Muontra::find($id_Muontra);
        $muonsach->tinhtrang = 'Từ chối';
        $muonsach->save();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();
        return redirect()->back()->with('status','Bạn đã từ chối cho mượn quyển sách này');     }

    public function datra(Request $request)
    {
        $id_Muontra = $request ->id_Muontra;
        $muonsach = Muontra::find($id_Muontra);
        $muonsach-> tinhtrang = 'Đã trả';
        $muonsach-> ngay_Tra = date('Y-m-d');
        $muonsach->save();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();  
        return redirect()->back()->with('status','Đồng ý trả sách thành công');     }
    
}
