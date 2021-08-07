@extends('home')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content1')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show book</li>
  </ol>
</nav>

<div class="card-header">{{ __('Liệt kê sách') }}</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sách</th>
            <th scope="col">Slug sách</th>
            <th scope="col">Tên tác giả</th>
            <th scope="col"> Danh mục </th>
            <th scope="col"> Nhà xuất bản </th>
            <th scope="col"> Năm xuất bản</th>
            <th scope="col"> Hình ảnh </th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá bìa</th>
            <th scope="col"> Quản lý </th>

        </tr>
    </thead>
    <tbody class="tbody">
        @foreach($list_sach as $key => $sach)
        <tr>
            <td scope="row">{{$key}}</td>
            <td>{{$sach->tensach}}</td>
            <td>{{$sach->slugsach}}</td>
            <td>{{$sach->tentacgia}}</td>
            <td>{{$sach->danhmucsach->tendanhmuc}}</td>
            <td>{{$sach->nhaxuatban}}</td>
            <td>{{$sach->namxuatban}}</td>
            <td><img src="{{asset('uploads/sach/'.$sach->hinhanh)}}" height="180px" width="150px" </td>
            <td>{{$sach->soluong}}</td>
            <td>{{$sach->giabia}}</td>
            <td>
                <div style="display:flex;">
                <a href="{{route('sach.edit',[$sach->id_Sach])}}" class="btn btn-primary btn-sm">edit</a>
                <form action="{{route('sach.destroy',[$sach->id_Sach])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button style="margin-left: 5px;;" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger btn-sm">delete</button>

                </form>
            </div>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection