<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucSach;
use App\Models\Sach;
use App\Models\User;
use App\Models\Muontra;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_books = Sach::all()-> count();
        $new_users = User::all()->where('User::DATEDIFF(CURRENT_DATE,`created_at`)','<','7')->count();
        $tongtien = DB::select(DB::raw("SELECT SUM(soluong*giabia) as tongtien from sach"));
        $array1=[];
        foreach ($tongtien as $key => $value) {
        array_push($array1,$value->tongtien); 
        //  
        }
        // dd($array1);
        // exit();
        $luotmuon = Muontra::all()->where('tinhtrang','Đang mượn')->where('Muontra::DATEDIFF(CURRENT_DATE,`ngay_Muon`)','<','7')->count();
        return view('admin.dashboard.index')->with(compact('total_books','new_users','luotmuon','array1'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tien_danhmuc =  DB::table('sach')
        ->join('danhmuc','sach.id_Danhmuc','=','danhmuc.id_Danhmuc')
        ->select('danhmuc.tendanhmuc','sach.id_Danhmuc', DB::raw('sum(sach.giabia*sach.soluong) as sum'))
        ->orderBy('sach.id_Danhmuc')
        ->groupBy('danhmuc.id_Danhmuc')
        ->get();

        $tien_nhaxuatban =  DB::table('sach')
        ->select('sach.nhaxuatban', DB::raw('sum(sach.giabia*sach.soluong) as sum'))
        ->groupBy('sach.nhaxuatban')
        ->get();
        
        $tien_tentacgia =  DB::table('sach')
        ->select('sach.tentacgia', DB::raw('sum(sach.giabia*sach.soluong) as sum'))
        ->groupBy('sach.tentacgia')
        ->get();
       
        // $tien_danhmuc1 = DanhmucSach::with('danhmucsach')
        //                  ->get();                     

        return view('admin.dashboard.tiensach')->with(compact('tien_danhmuc','tien_nhaxuatban','tien_tentacgia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
