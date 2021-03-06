<?php

namespace App\Http\Controllers;

use App\Models\Muontra;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\User;
use App\Models\DanhmucSach;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MuonsachController extends Controller
{
   
    public function index(Request $request)
    {  
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'sach.id_Sach', 'muontra.ngay_Muon','muontra.ngay_Hentra','muontra.ngay_Tra','muontra.tinhtrang')
        ->where('users.id',Auth::id())
        ->get();
        return view('homepage.muonsach')->with(compact('muon','danhmuc'));
    }

    public function store(Request $request)
    {   
         
            $muonsach = new Muontra();
            $muonsach-> id_Sach = $request['id_Sach'];
            $muonsach -> id = $request['id'];
            $muonsach -> ngay_Muon = date('Y-m-d');
            $muonsach -> ngay_Hentra = date('Y-m-d', strtotime('+1 years'));
            $muonsach -> tinhtrang = $request['tinhtrang'];
            $muonsach ->save();
            return redirect()->back()->with('status','Gửi yêu cầu mượn sách thành công,vui lòng đợi');

               
    }
}
