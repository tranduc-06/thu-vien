<?php

namespace App\Http\Controllers;

use App\Models\DanhmucSach;
use App\Models\Sach;
use App\Models\Ddc;
use Illuminate\Http\Request;

class SachController extends Controller
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
        $list_sach = Sach::with('danhmucsach')->get();
        $list_sach = Sach::with('ddc')->get();
        $list_sach = Sach::all();
        return view('admin.sach.index')->with(compact('list_sach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmucsach = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $ddc = Ddc::orderBy('malopDDC','DESC')->get();
        return view('admin.sach.create')->with(compact('danhmucsach','ddc'));
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
            'slugsach' => 'required|unique:sach|max:255',
            'hinhanh' => 'required|image|mimes:jpg,png,gif,svg',
            'tomtat' => 'required|max:500',
            'nhaxuatban' => 'required',
            'soluong' => 'required',
            'giabia' => 'required',
            'namxuatban' => 'required',
            'tentacgia' => 'required',
            'danhmuc' => 'required',
            'ddc' => 'required'

        ],  
        [
            'tensach.required' => 'Tên sách phải có nhé',
            'slug.required' => 'Slug sách phải có nhé',
            'tensach.unique' => 'Tên sách đã có vui lòng chọn tên khác',
            'namxuatban.max' => 'Vui lòng nhập lại năm xuất bản',
            'hinhanh.required' => 'Hình ảnh phải có nhé',
            'tomtat.required' => 'Tóm tắt phải có nhé',

        ]);

        $sach = new Sach();
        $sach -> tensach = $validated['tensach'];
        $sach -> slugsach = $validated['slugsach'];
        $sach -> tomtat = $validated['tomtat'];
        $sach -> nhaxuatban = $validated['nhaxuatban'];
        $sach -> namxuatban = $validated['namxuatban'];
        $sach -> tentacgia = $validated['tentacgia'];
        $sach -> soluong = $validated['soluong'];
        $sach -> giabia = $validated['giabia'];
        $sach -> id_Danhmuc = $validated['danhmuc'];
        $sach -> malopDDC = $validated['ddc'];

        $get_image = $request->hinhanh;
        $path = 'uploads/sach';
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
    public function edit($id_Sach)

    {   $sach = Sach::with('danhmucsach')->where('id_Sach',$id_Sach)  ->get();
        $danhmucsach = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
        $ddc = Ddc::orderBy('malopDDC','DESC')->get();
        $sach = Sach::find($id_Sach);
        return view('admin.sach.edit') -> with(compact('sach','danhmucsach','ddc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Sach)
    {
        $validated = $request->validate([
            'tensach' => 'required|unique:sach|max:255',
            'slugsach' => 'required',
            'hinhanh' => 'required|image|mimes:jpg,png,gif,svg',
            'tomtat' => 'required|unique:sach|max:500',
            'nhaxuatban' => 'required',
            'namxuatban' => 'required',
            'soluong' => 'required',
            'giabia' => 'required',
            'tentacgia' => 'required',
            'danhmuc' => 'required',
            'ddc' => 'required'

        ],  
        [
            'tensach.required' => 'Tên sách phải có nhé',
            'tensach.unique' => 'Tên sách đã có vui lòng chọn tên khác',
            'hinhanh.required' => 'Hình ảnh phải có nhé',
            'namxuatban.max' => 'Vui lòng nhập lại năm xuất bản',
            'tomtat.required' => 'Tóm tắt phải có nhé',
            'namxuatban.required' => 'Vui lòng nhập đúng năm'

        ]);

        $sach = Sach::find($id_Sach);
        $sach -> tensach = $validated['tensach'];
        $sach -> slugsach = $validated['slugsach'];
        $sach -> tomtat = $validated['tomtat'];
        $sach -> nhaxuatban = $validated['nhaxuatban'];
        $sach -> namxuatban = $validated['namxuatban'];
        $sach -> tentacgia = $validated['tentacgia'];
        $sach -> soluong = $validated['soluong'];
        $sach -> giabia = $validated['giabia'];
        $sach -> id_Danhmuc = $validated['danhmuc'];
        $sach -> malopDDC = $validated['ddc'];

        $get_image = $request->hinhanh;
        $path = 'uploads/sach';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $sach -> hinhanh = $new_image;

        $sach ->save();
        return redirect()->back()->with('status','Cập nhật sách thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Sach)
    {   $sach =  Sach::find($id_Sach);
        $path = 'uploads/sach'.$sach->hinhanh;
        if(file_exists($path))
        {
            unlink($path);
        }

        Sach::find($id_Sach)->delete();
        return redirect()->back()->with('status','Xóa sách thành công');
    }
}
