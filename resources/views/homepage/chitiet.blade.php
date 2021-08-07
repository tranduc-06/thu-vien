@extends('layouts.user')

@section('content2')

@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

@foreach($sach as $key => $chitiet)
<div class="container" style="margin-bottom:10vh; margin-top:-5vh;">
  <div class="row">
    <div class="col-md-3">
      <img src="{{asset('uploads/sach/'.$chitiet->hinhanh)}}" style="float:left;" width="200px" height="290px" />

      <label>{{$chitiet->tensach}}</label>
    </div>
    <div class="col-md-7">
      <table class="table">

        <tbody>
          <tr>
            <th scope="row">Tác giả</th>
            <td>{{$chitiet->tentacgia}}</td>

          </tr>
          <tr>
            <th scope="row">Nhà xuất bản</th>
            <td>{{$chitiet->nhaxuatban}}</td>

          </tr>
          <tr>
            <th scope="row">Năm xuất bản</th>
            <td>{{$chitiet->namxuatban}}</td>

          </tr>
          <tr>
            <th scope="row">Số lượng</th>
            <td>{{$chitiet->soluong}}</td>
          </tr>
          <tr>
            <th scope="row">Gía bìa</th>
            <td>{{$chitiet->giabia}}</td>
          </tr>
          <tr>
            <th scope="row">Tóm tắt</th>
            <td>{{$chitiet->tomtat}}</td>

          </tr>
          <tr>
          <th scope="row"></th>
            <td>
              @if(in_array($id_Sach, $array))
              <button class="btn btn-primary btn-sm" disabled> Đang mượn</button>

              @elseif($chitiet->soluong == 0)
              <p><strong>Sách đang tạm hết,vui lòng chọn sách khác</strong></p>


              @else

              <form action="{{url('muon-sach-1')}}" method="post">
                @csrf
                <input type="hidden" name="tinhtrang" value="Đang chờ" />
                <input type="hidden" name="id" value="{{$user}}" />
                <input type="hidden" name="id_Sach" value="{{$id_Sach}}" />
                <button type="submit" class="btn btn-primary btn-sm">Mượn</button>
              </form>
            </td>
            @endif
          </tr>
        </tbody>

      </table>
      @endforeach
      <div class="col-md-4"></div>
    </div>
  </div>
</div>

  @endsection