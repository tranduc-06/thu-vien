@extends('home')

@section('content1')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Require</li>
  </ol>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Tên độc giả</th>
      <th scope="col">id_Thẻ</th>
      <th scope="col">Email</th>
      <th scope="col">Ngày mượn</th>
      <th scope="col">Ngày hẹn trả</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($muon as $key => $value)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$value->tensach}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->id}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->ngay_Muon}}</td>
      <td>{{$value->ngay_Hentra}}</td>
  
      <td>
              <div style="display:flex;">
                <form action="{{url('/quanlymuonsach/dongy')}}" method="post">
                    @csrf
                    <input type="hidden" name="id_Muontra" value="{{$value->id_Muontra}}"/>
                    <button onclick="return confirm('Bạn đồng ý cho mượn quyển sách này?')" class="btn btn-primary btn-sm">Đồng ý</button>
                </form>
                <form action="{{url('/quanlymuonsach/tuchoi')}}" method="post">
                    @csrf
                    <input type="hidden" name="id_Muontra" value="{{$value->id_Muontra}}"/>
                    <button style="margin-left: 5px;;" onclick="return confirm('Bạn từ chối cho mượn quyển sách này?')" class="btn btn-danger btn-sm">Từ chối</button>
                </form>
            </div>
            </td> 
    </tr>
    @endforeach
  </tbody>
</table>

@endsection