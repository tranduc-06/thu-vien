@extends('layouts.user')

@section('content2')
<table class="table">

        @foreach ($thanhvien as $key => $value)
        <tr>
            <th scope="row">id_Thẻ</th>
            <th scope="row">{{$value->id}}</th>
        </tr>
        <tr>
             <th scope="row">Tên độc giả</th>
            <td>{{$value->name}}</td>
        </tr>
        <tr>
            <th scope="row">Điện thoại</th>
            <td>{{$value->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{$value->email}}</td>
        </tr>
        <tr>
            <th scope="row">Ngày bắt đầu</th>
            <td>{{$value->created_at}}</td>
        </tr>
        <tr>
            <th scope="row">Địa chỉ</th>
            <td>{{$value->address}}</td>
        </tr>
       @endforeach
</table>

@endsection