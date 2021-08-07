<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Muontra;
use App\Models\Sach;
use App\Models\User;
use App\Models\DanhmucSach;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;

class QuanlyMuonsachController extends Controller
{
    public function index() {

        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id','muontra.id_Sach','muontra.id_Muontra', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->where('muontra.tinhtrang','Đang mượn')
        ->orwhere('muontra.tinhtrang','Đã trả')
        ->orwhere('muontra.tinhtrang','Quá hạn')
        ->get();
        return view('admin.quanlymuonsach.index')->with(compact('muon','danhmuc'));
    }

    public function require()
    {
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id_Sach','muontra.id','muontra.id_Muontra', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->where('muontra.tinhtrang','Đang chờ')
        ->get();
        return view('admin.quanlymuonsach.required')->with(compact('muon','danhmuc'));
    }

    public function dongy(Request $request)
    {   $id_Sach = $request->id_Sach;
        $id_Muontra = $request ->id_Muontra;
        $muonsach = Muontra::find($id_Muontra);
        $muonsach->tinhtrang = 'Đang mượn';
        $muonsach->save();
       
        $update = Sach::find($id_Sach);
        $update1 = $update->soluong-1;
        $update->soluong = $update1;
        $update->save();
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
        $ngay_Muon = $request->ngay_Muon;
        // $tra = date('Y-m-d');
       
        // $first_datetime = new DateTime($ngay_Muon);
        // $last_datetime = new DateTime($tra);
        // $check_Date = $ngay_Muon->diff($tra);
        // dump($check_Date);
        $id_Sach = $request->id_Sach;
        
        $id_Muontra = $request ->id_Muontra;
        $muonsach = Muontra::find($id_Muontra);
        $muonsach-> ngay_Tra = date('Y-m-d');
        $ngay_Tra = date('Y-m-d');
        $ngay_Hentra = $muonsach->ngay_Hentra;

        if($ngay_Tra<$ngay_Hentra)
        {
        $muonsach-> tinhtrang = 'Đã trả';
        $muonsach->save();
        $update = Sach::find($id_Sach);
        $update1 = $update->soluong+1;
        $update->soluong = $update1;
        $update->save();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();  
        return redirect()->back()->with('status','Đồng ý trả sách thành công');
        
        }
        else
        {
        $muonsach-> tinhtrang = 'Quá hạn';     
        $muonsach->save();
        $update = Sach::find($id_Sach);
        $update1 = $update->soluong+1;
        $update->soluong = $update1;
        $update->save();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->get();  
        return redirect()->back()->with('status','Sách trả quá hạn');
        }
    }
    
}
