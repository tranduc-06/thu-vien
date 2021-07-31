@extends('home')

@section('content1')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id_Thẻ</th>
            <th scope="col">Tên độc giả</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Địa chỉ</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($thanhvien as $key => $value)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->address}}</td>

        </tr>
       @endforeach
    </tbody>
</table>

@endsection