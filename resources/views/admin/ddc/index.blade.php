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

<div class="card-header">{{ __('Liệt kê lớp DDC') }}</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Mã lớp DDC</th>
                <th scope="col">Tên lớp DDC</th>
                <th scope="col">Slug DDC</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ddc as $key => $ddc)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$ddc->malopDDC}}</td>
                <?php
                dump($ddc->malopDDC);
                exit();
                ?>
                <td>{{$ddc->tenlopDDC}}</td>
                <td>{{$ddc->slugDDC}}</td>
                <td>
                <div style="display:flex;">
                    <span><a href="{{route('ddc.edit',[$ddc->malopDDC])}}" class="btn btn-primary btn-sm">edit</a></span>
                    <form action="{{route('ddc.destroy',[$ddc->malopDDC])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <span><button style="margin-left:5px;" onclick="return confirm('Bạn có muốn xóa lớp DDC này không')" class="btn btn-danger btn-sm">delete</button></span>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection