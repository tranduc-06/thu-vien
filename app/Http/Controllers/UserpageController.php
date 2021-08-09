<?php

namespace App\Http\Controllers;

use App\Models\DanhmucSach;
use App\Models\Muontra;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\User;
use App\Models\Ddc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class UserpageController extends Controller
{
    public function index()
    { 
        $sach = Sach::orderBy('id_Sach','DESC')->get();
        // $muonnhieu = DB::table('muontra')->join('sach','id_Sach','=','id_Sach')
        //              ->select('sach.tensach')
        //              ->where('tinhtrang','Đang mượn')
        //              ->where('Muontra::DATEDIFF(CURRENT_DATE,`ngay_Muon`)','<','7')
        //              ->groupBy('Muontra::id_Sach')
        //              ->orderBy('count()')
        //              ->get();

        // $muonnhieu = DB::select(DB::raw("SELECT sach.id_Sach 
        // from muontra  AS muontra
        // join sach AS sach on muontra.id_Sach = sach.id_Sach 
        // WHERE tinhtrang = 'Đang mượn' and ngay_Muon BETWEEN (SELECT CURRENT_DATE()-7) AND (SELECT CURRENT_DATE()) 
        // GROUP BY sach.id_Sach 
        // ORDER BY COUNT(*) DESC 
        // LIMIT 1
        // "));
         $muonnhieu1 = DB::select(DB::raw("SELECT muontra.id_Sach 
         from muontra  
         WHERE tinhtrang = 'Đang mượn' and ngay_Muon BETWEEN (SELECT CURRENT_DATE()-7) AND (SELECT CURRENT_DATE()) 
         GROUP BY muontra.id_Sach 
         ORDER BY COUNT(*) DESC 
         LIMIT 5 
         "));
        $array1=[];
        foreach ($muonnhieu1 as $key => $value) {
        array_push($array1,$value->id_Sach); 
        //  
        } 

 
        $muonnhieu = Sach::all()
                     ->whereIn('id_Sach', $array1);
        // $muonnhieu1 = muontra::select('id_Sach')->where('tinhtrang','Đang mượn')
        // ->where(DB::raw('DATEDIFF(muontra.ngay_Muon,CURRENT_DATE)','>','7'))
        // ->groupBy('id_Sach')
        // ->orderBy(DB::raw('count(id_Sach)', 'DESC'))
        // ->get();
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $ddc = Ddc::orderBy('malopDDC','ASC')->get();
        return view('homepage.userpage')->with(compact('danhmuc','sach','muonnhieu','ddc'));
    }


    public function ddc($slugDDC)
    {
        $ddc = Ddc::orderBy('malopDDC','DESC')->get();
        dd($ddc)
        ;
        exit();
        $ddc_malop = Ddc::where('slugDDC',$slugDDC)->first();       
        $sach = Sach::orderBy('id_Sach','DESC')->where('malopDDC',$ddc_malop->malopDDC)->get();
        return view('homepage.ddc')->with(compact('ddc','sach','ddc_malop'));
        
    }

    public function danhmuc($slugdanhmuc)
    {
        $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $danhmuc_id = DanhmucSach::where('slugdanhmuc',$slugdanhmuc)->first();       
        $sach = Sach::orderBy('id_Sach','DESC')->where('id_Danhmuc',$danhmuc_id->id_Danhmuc)->get();
        return view('homepage.danhmuc')->with(compact('danhmuc','sach','danhmuc_id'));
        
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
