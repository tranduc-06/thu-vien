<?php

namespace App\Http\Controllers;

use App\Models\DanhmucSach;
use App\Models\Sach;
use Illuminate\Http\Request;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sach.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmucsach = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        return view('admin.sach.create')->with(compact('danhmucsach'));
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
            'tensach' => 'required|unique:sach|max:255',
            'hinhanh' => 'required|image|mimes:jpg,png,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'tomtat' => 'required|unique:sach|max:255',
            'nhaxuatban' => 'required',
            'namxuatban' => 'required',
            'tentacgia' => 'required',
            'danhmuc' => 'required'

        ],  
        [
            'tensach.required' => 'Tên sách phải có nhé',
            'tensach.unique' => 'Tên sách đã có vui lòng chọn tên khác',
            'hinhanh.required' => 'Hình ảnh phải có nhé',
            'tomtat.required' => 'Tóm tắt phải có nhé'

        ]);

        $sach = new Sach();
        $sach -> tensach = $validated['tensach'];
        $sach -> tomtat = $validated['tomtat'];
        $sach -> nhaxuatban = $validated['nhaxuatban'];
        $sach -> namxuatban = $validated['namxuatban'];
        $sach -> tentacgia = $validated['tentacgia'];
        $sach -> id_Danhmuc = $validated['danhmuc'];

        $get_image = $request->hinhanh;
        $path = '/public/uploads/sach';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $sach -> hinhanh = $new_image;

        $sach ->save();
        return redirect()->back()->with('status','Thêm sách thành công');

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
