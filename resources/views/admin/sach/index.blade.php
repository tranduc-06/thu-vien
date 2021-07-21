@extends('layouts.app')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê sách') }}

                </div>

                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                    <form>
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">IdSach</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="IdSach">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên Sách</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên Sách">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">idTacgia</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="IdTacgia">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Idtheloai</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="IdTheloai">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">IdNxb</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="IdNxb">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Namxuatban</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Namxuatban">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tóm tắt</label>
                            <textarea class="form-control" id="exampleInputPassword1" placeholder="Tomtat"></textarea>
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection