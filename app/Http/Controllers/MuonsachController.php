<?php

namespace App\Http\Controllers;

use App\Models\Muontra;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MuonsachController extends Controller
{
   
    public function index(Request $request)
    {  
        $muon = DB::table('muontra')->join('users', 'muontra.id', '=', 'users.id')
        ->join('sach', 'muontra.id_Sach', '=', 'sach.id_Sach')
        ->select('users.name','users.email','users.phone','users.address','sach.tensach','muontra.id', 'muontra.ngay_Muon','muontra.ngay_Hentra')
        ->where('users.id',Auth::id())
        ->get();
        return view('homepage.muonsach')->with(compact('muon'));
    }

    public function store(Request $request)
    {   
        $muonsach = new Muontra();
        $muonsach-> id_Sach = $request['id_Sach'];
        $muonsach -> id = $request['id'];
        $muonsach -> ngay_Muon = date('Y-m-d');
        $muonsach -> ngay_Hentra = date('Y-m-d', strtotime('+1 years'));
        $muonsach ->save();
        return redirect()->back()->with('status','Gửi yêu cầu mượn sách thành công,vui lòng đợi');
    }
}
