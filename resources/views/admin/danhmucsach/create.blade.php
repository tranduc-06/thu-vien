@extends('layouts.app')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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

                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 

                 <form method="post" action="{{ route('danhmucsach.store')}}">

                    @csrf
                            
                    <div class="form-group">
                        <label for="tendanhmuc">Tên danh mục</label>
                        <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc" placeholder="Tên danh mục">
                    </div>
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
    </div>
@endsection