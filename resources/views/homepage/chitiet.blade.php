@extends('layouts.user')
@section('content2')

<section>
@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

  @foreach($sach as $key => $chitiet)
  <img src="{{asset('uploads/sach/'.$chitiet->hinhanh)}}"style="float:left;" width="150px" height="290px"/>
  <ul class="text-center">
  <label>Tên sách</label>
  <li>{{$chitiet->tensach}}</li>
  <li>{{$chitiet->tentacgia}}</li>
  <li>{{$chitiet->nhaxuatban}}</li>
  <li>{{$chitiet->namxuatban}}</li>
  <li>{{$chitiet->tomtat}}</li>

  @endforeach
</ul>

@if(in_array($id_Sach, $array))
<button  class="btn btn-primary btn-sm" disabled> Đang mượn</button>

@else

<form action="{{url('muon-sach-1')}}" method="post">
  @csrf
  <input type="hidden" name="tinhtrang" value="Đang chờ"/>
  <input type="hidden" name="id" value="{{$user}}"/>
  <input type="hidden" name="id_Sach" value="{{$chitiet->id_Sach}}"/>
  <button type="submit" class="btn btn-primary btn-sm">Mượn</button>
</form>
</section>
@endif
@endsection