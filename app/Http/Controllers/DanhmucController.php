<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucSach;

class DanhmucController extends Controller
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
        $danhmucsach = DanhmucSach::all();
        return view('admin.danhmucsach.index') -> with(compact('danhmucsach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmucsach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tendanhmuc' => 'required|unique:danhmuc|max:255',
        ],  
        [
            'tendanhmuc.required' => 'tên danh mục phải có',
        ]);

        $danhmucsach = new DanhmucSach();
        $danhmucsach -> tendanhmuc = $validated['tendanhmuc'];
        $danhmucsach ->save();
        return redirect()->back()->with('status','Thêm danh mục thành công');

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
    public function edit($id_Danhmuc)
    {
        $danhmucsach = DanhmucSach::find($id_Danhmuc);
        return view('admin.danhmucsach.edit') -> with(compact('danhmucsach'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Danhmuc)
    {
        $validated = $request->validate([
            'tendanhmuc' => 'required|unique:danhmuc|max:255',
        ],  
        [
            'tendanhmuc.required' => 'tên danh mục phải có',
        ]);

        $danhmucsach = DanhmucSach::find($id_Danhmuc);
        $danhmucsach -> tendanhmuc = $validated['tendanhmuc'];
        $danhmucsach ->save();
        return redirect()->back()->with('status','Cập nhật danh mục thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Danhmuc)
    {
        
        DanhmucSach::find($id_Danhmuc)->delete();
        return redirect()->back()->with('status','Xóa danh mục thành công');
    }
}
