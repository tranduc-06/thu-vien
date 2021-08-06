@extends('layouts.user')
@section('content2')

    <!-- End: Welcome Section -->


    <!-- Start: Our Community Section -->

    <section>   
        <div class="text-center">

            <div class="album py-5 bg-light">
                <div class="container">
                    @php
                    $count = count($sach);
                    @endphp
                    @if($count==0)
                    <p>Không tìm thấy sách nào cho từ khóa: {{$tukhoa}}</p>
                    @else

                    <div class="text-center">
                        <h2 class="section-title"></h2>
                        <span class="underline center"></span>
                        <p class="lead">Từ khóa: {{$tukhoa}}</p>
                    </div>
                    <div class="row">
                        @foreach($sach as $key => $value)
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset('uploads/sach/'.$value->hinhanh)}}" width="200px" height="300px">
                                <div class="card-body">
                                    <br>
                                    <h5>{{$value->tensach}}</h5> <br>
                                    <p class="card-text">{{$value->tentacgia}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('chi-tiet/'.$value->slugsach)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                <a href="" class="btn btn-sm btn-success">Xem tất cả</a>
                @endif
                </div>
            </div>
        </div>
    </section>
@endsection
   