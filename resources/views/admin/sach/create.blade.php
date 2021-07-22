@extends('home')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content1')
<!-- 
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
<div class="card-header">{{ __('Thêm danh mục sách') }}</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<form method="post" action="{{ route('danhmucsach.store')}}">

    @csrf

    <div class="form-group">
        <label for="tendanhmuc">Tên sách</label>
        <input type="text" class="form-control" value="{{ old('tensach')}}" name="tensach" id="tensach" placeholder="Tên sách">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Tên danh mục</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tacgia">Tác giả</label>
        <input type="text" class="form-control" value="{{ old('tacgia')}}" name="tacgia" id="tacgia" placeholder="Tên tác giả">
    </div>
    <div class="form-group">
        <label for="tendanhmuc">Năm xuất bản</label>
        <input type="text" class="form-control" value="{{ old('namxuatban')}}" name="namxuatban" id="namxuatban" placeholder="Năm xuất bản">
    </div>
    <div class="form-group">
        <label for="tendanhmuc">Nhà xuất bản</label>
        <input type="text" class="form-control" value="{{ old('nhaxuatban')}}" name="nhaxuatban" id="nhaxuatban" placeholder="Nhà xuất bản">
    </div>
    <div class="form-group">
        <label for="tendanhmuc">Hình ảnh</label>
        <input type="file" class="form-control-file" name="hinhanh">
    </div>

    <div>
        <label for="tomtat">Tóm tắt</label>
        <textarea class="form-control" name="tomtat"></textarea>
    </div><br>
    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
    <div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>
</div>

@endsection