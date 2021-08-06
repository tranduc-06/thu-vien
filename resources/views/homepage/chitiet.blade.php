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
      <div class="col-md-3">
        <ul class="text-center" style="list-style: none;">       
          <label>Tác giả</label>
          <li>{{$chitiet->tentacgia}}</li>
          <label>Nhà xuất bản</label>
          <li>{{$chitiet->nhaxuatban}}</li>
          <label>Năm xuất bản</label>
          <li>{{$chitiet->namxuatban}}</li>
          <label>Tóm tắt</label>
          <li>{{$chitiet->tomtat}}</li>
          @endforeach
        

        @if(in_array($id_Sach, $array))
        <button class="btn btn-primary btn-sm" disabled> Đang mượn</button>

        @else

        <form action="{{url('muon-sach-1')}}" method="post">
          @csrf
          <input type="hidden" name="tinhtrang" value="Đang chờ" />
          <input type="hidden" name="id" value="{{$user}}" />
          <input type="hidden" name="id_Sach" value="{{$chitiet->id_Sach}}" />
          <button type="submit" class="btn btn-primary btn-sm">Mượn</button>
        </form>
      </ul>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

@endif

@endsection