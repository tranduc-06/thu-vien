<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ddc;

class DdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ddc = Ddc::all();
        return view('admin.ddc.index') -> with(compact('ddc'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ddc.create');
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
            'malopDDC' => 'required|unique:ddc|max:255',
            'tenlopDDC' => 'required|unique:ddc|max:255',
            'slugDDC' => 'required|unique:ddc|max:255',
        ],  
        [
            'malopDDC.unique' => 'mã lớp DDC đã có,vui lòng điền tên khác',
            'tenlopDDC.unique' => 'tên lớp DDC đã có,vui lòng điền tên khác',
            'malopDDC.required' => 'mã lớp DDC phải có nhé',
            'tenlopDDC.required' => 'tên lớp DDC phải có nhé',
        ]);

        $ddc = new Ddc();
        $ddc -> malopDDC = $validated['malopDDC'];
        $ddc -> tenlopDDC = $validated['tenlopDDC'];
        $ddc -> slugDDC = $validated['slugDDC'];
        $ddc ->save();
        return redirect()->back()->with('status','Thêm lớp DDC thành công');

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
    public function edit($malopDDC)
    {
        $ddc = Ddc::find($malopDDC);
        return view('admin.ddc.edit') -> with(compact('ddc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $malopDDC)
    {
        $validated = $request->validate([
            'malopDDC' => 'required|unique:ddc|max:255',
            'tenlopDDC' => 'required|unique:dcc|max:255',
            'slugDDC' => 'required|unique:ddc|max:255',
        ],  
        [
            'malopDDC.unique' => 'mã lớp DDC đã có,vui lòng điền tên khác',
            'tenlopDDC.unique' => 'tên lớp DDC đã có,vui lòng điền tên khác',
            'malopDDC.required' => 'mã lớp DDC phải có nhé',
            'tenlopDDC.required' => 'tên lớp DDC phải có nhé',
        ]);

        $ddc = Ddc::find($malopDDC);
        $ddc -> malopDDC = $validated['malopDDC'];
        $ddc -> tenlopDDC = $validated['tenlopDDC'];
        $ddc -> slugDDC = $validated['slugDDC'];
        $ddc ->save();
        return redirect()->back()->with('status','Cập nhật lớp DDC thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($malopDDC)
    {
        Ddc::find($malopDDC)->delete();
        return redirect()->back()->with('status','Xóa lớp DDC thành công');
    }
}
