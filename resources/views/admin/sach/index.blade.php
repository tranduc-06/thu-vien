@extends('home')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content1')

<div class="card-header">{{ __('Liệt kê sách') }}</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên sách</th>
                <th scope="col">Tên tác giả</th>
                <th scope="col"> Danh mục </th>
                <th scope="col"> Nhà xuất bản </th>
                <th scope="col"> Năm xuất bản</th>
                <th scope="col"> Hình ảnh </th>
                <th scope="col"> Quản lý </th>

            </tr>
        </thead>
        <tbody>
            @foreach($sach as $key => $danhmuc)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$danhmuc->tendanhmuc}}</td>
                <td>
                    <span><a href="{{route('danhmucsach.edit',[$danhmuc->id_Danhmuc])}}" class="btn btn-primary btn-sm">edit</a></span>
                    <form action="{{route('danhmucsach.destroy',[$danhmuc->id_Danhmuc])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <span><button onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger btn-sm">delete</button></span>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection