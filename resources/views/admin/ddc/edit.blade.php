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
    <li class="breadcrumb-item active" aria-current="page">Edit category</li>
  </ol>
</nav>

<div class="card-header">{{ __('Cập nhật danh mục sách') }}</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



    <form method="post" action="{{ route('ddc.update',[$ddc->malopDDC])}}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="malopDDC">Mã lớp DDC</label>
            <input type="text" class="form-control" value="{{$ddc->malopDDC}}" name="malopDDC" placeholder="Mã lớp DDC">
        </div>
        
        <div class="form-group">
            <label for="tenlopDDC">Tên lớp DDC</label>
            <input type="text" class="form-control" value="{{$ddc->tenlopDDC}}" onkeyup="ChangeToSlug()" name="tenlopDDC" id="slug" placeholder="Tên lớp DDC">
        </div>
        <div class="form-group">
            <label for="slugdanhmuc">Slug DDC</label>
            <input type="text" class="form-control" value="{{$ddc->slugDDC}}" name="slugdanhmuc" id="convert_slug" placeholder="Slug DDC">
        </div>

        <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

@endsection