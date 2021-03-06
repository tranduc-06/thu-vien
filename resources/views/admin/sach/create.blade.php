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

            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add book</li>
  </ol>
</nav>

<div class="card-header">{{ __('Thêm sách') }}</div>

 @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<form method="post" action="{{ route('sach.store')}}" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="tensach">Tên sách</label>
        <input type="text" class="form-control" onkeyup="ChangeToSlug()" value="{{ old('tensach')}}" name="tensach" id="slug" placeholder="Tên sách">
    </div>
    <div class="form-group">
        <label for="slugsach">Slug sách</label>
        <input type="text" class="form-control" value="{{ old('slugsach')}}" name="slugsach" id="convert_slug" placeholder="Slug sách">
    </div>

    <div class="form-group">
        <label for="ddc">Tên lớp DDC</label>
        <select class="form-control" id="ddc" name="ddc">
            @foreach($ddc as $key => $muc)
            <option value="{{$muc->malopDDC}}">{{$muc->tenlopDDC}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="danhmuc">Tên danh mục</label>
        <select class="form-control" id="danhmuc" name="danhmuc">
            @foreach($danhmucsach as $key => $muc)
            <option value="{{$muc->id_Danhmuc}}">{{$muc->tendanhmuc}}</option>
            @endforeach
        </select>
    </div>
  
    <div class="form-group">
        <label for="tacgia">Tác giả</label>
        <input type="text" class="form-control" value="{{ old('tentacgia')}}" name="tentacgia" id="tentacgia" placeholder="Tên tác giả">
    </div>
    <div class="form-group">
        <label for="namxuatban">Năm xuất bản</label>
        <input type="number" class="form-control" value="{{ old('namxuatban')}}" name="namxuatban" id="namxuatban" placeholder="Năm xuất bản" max=2021>
    </div>
    <div class="form-group">
        <label for="nhaxuatban">Nhà xuất bản</label>
        <input type="text" class="form-control" value="{{ old('nhaxuatban')}}" name="nhaxuatban" id="nhaxuatban" placeholder="Nhà xuất bản">
    </div>
    <div class="form-group">
        <label for="hinhanh">Hình ảnh</label>
        <input type="file" class="form-control-file" name="hinhanh">
    </div>

    <div class="form-group">
        <label for="soluong">Số lượng</label>
        <input type="number" class="form-control" name="soluong">
    </div>
    <div class="form-group">
        <label for="giabia">Giá bìa</label>
        <input type="number" class="form-control" name="giabia">
    </div>

    <div>
        <label for="tomtat">Tóm tắt</label>
        <textarea class="form-control"  name="tomtat" rows="5" style="resize: none;"></textarea>
    </div><br>
    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
    <div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>

<script>
    document.getElementById("tentacgia").onblur = function() {
        this.value = ChuanhoaTen(this.value);
    };
    document.getElementById("nhaxuatban").onblur = function() {
        this.value = ChuanhoaTen(this.value);
    };
    function ChuanhoaTen(ten) {
        dname = ten;
        ss = dname.split(' ');
        dname = "";
        for (i = 0; i < ss.length; i++)
            if (ss[i].length > 0) {
                if (dname.length > 0) dname = dname + " ";
                dname = dname + ss[i].substring(0, 1).toUpperCase();
                dname = dname + ss[i].substring(1).toLowerCase();
            }
        return dname;
    }
</script>
</div>

@endsection