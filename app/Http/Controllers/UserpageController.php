<?php

namespace App\Http\Controllers;

use App\Models\DanhmucSach;
use App\Models\Muontra;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserpageController extends Controller
{
    public function index()
    { 
        $sach = Sach::orderBy('id_Sach','DESC')->get();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        return view('homepage.userpage')->with(compact('danhmuc','sach'));
    }

    public function danhmuc($slugdanhmuc)
    {
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $danhmuc_id = DanhmucSach::where('slugdanhmuc',$slugdanhmuc)->first();       
        $sach = Sach::orderBy('id_Sach','DESC')->where('id_Danhmuc',$danhmuc_id->id_Danhmuc)->get();
        return view('homepage.danhmuc')->with(compact('danhmuc','sach'));
        
    }



    public function chitiet($slugsach)
    {
        $user = Auth::user()-> id;
        $id_Sach = Sach::where('slugsach',$slugsach)->get('id_Sach')->toArray()[0]['id_Sach'];
        $muonsach = Muontra::where('id',$user)->where('tinhtrang','Đang mượn')->orwhere('tinhtrang','Đang chờ')->get('id_Sach')->toArray();
        $array=[];
        foreach ($muonsach as $key => $value) {
            array_push($array,$value['id_Sach']);
        }
        $sach = Sach::orderBy('id_Sach','DESC')->where('slugsach',$slugsach)->get();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
    
        return view('homepage.chitiet')->with(compact('danhmuc','sach','user','array','id_Sach'));
    }

    public function timkiem()
    {
       
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $tukhoa = $_GET['tukhoa'];
        $sach = Sach::with('danhmucsach')->where(function($query) {
            $tukhoa = $_GET['tukhoa'];
            $query->where('tensach','LIKE','%'.$tukhoa.'%')
                 ->orWhere('tentacgia','LIKE','%'.$tukhoa.'%')
                 ->orWhere('nhaxuatban','LIKE','%'.$tukhoa.'%')
                 ;})->get();
        return view('homepage.timkiem')->with(compact('danhmuc','sach','tukhoa'));
    }

    public function thethanhvien()
    {
        $user = auth() -> user ();
        $id = $user->id;
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $thanhvien = User::all()->where('id',$id);
        return view('homepage.thethanhvien')->with(compact('thanhvien','danhmuc'));
    }
}
