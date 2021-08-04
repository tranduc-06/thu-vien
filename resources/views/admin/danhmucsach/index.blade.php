@extends('home')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content1')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show category</li>
  </ol>
</nav>

<div class="card-header">{{ __('Liệt kê danh mục sách') }}</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Slug danh mục</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @foreach($danhmucsach as $key => $danhmuc)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$danhmuc->tendanhmuc}}</td>
                <td>{{$danhmuc->slugdanhmuc}}</td>
                <td>
                <div style="display:flex;">
                    <span><a href="{{route('danhmucsach.edit',[$danhmuc->id_Danhmuc])}}" class="btn btn-primary btn-sm">edit</a></span>
                    <form action="{{route('danhmucsach.destroy',[$danhmuc->id_Danhmuc])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <span><button style="margin-left:5px;" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger btn-sm">delete</button></span>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection