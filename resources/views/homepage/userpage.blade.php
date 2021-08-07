@extends('layouts.user')
@section('content2')
    <!-- <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-wrap">
                        <div class="welcome-text">
                            <h2 class="section-title">Welcome to the libraria</h2>
                            <span class="underline left"></span>
                            <p class="lead">The standard chunk of Lorem Ipsum used since</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>
                            <a class="btn btn-primary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="facts-counter">
                        <ul>
                            <li class="bg-light-green">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="ebook"></i>
                                    </div>
                                    <span>eBooks<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="bg-green">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="eaudio"></i>
                                    </div>
                                    <span>eAudio<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="bg-red">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="magazine"></i>
                                    </div>
                                    <span>Magazine<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="bg-blue">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="videos"></i>
                                    </div>
                                    <span>Videos<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image" style="background-image: url(" {{asset('images/welcome-img-home-v1.jpg')}}")"></div>
    </section> -->
    <!-- End: Welcome Section -->


    <!-- Start: Our Community Section -->
    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Sách mượn nhiều</h2>
                <span class="underline center"></span>
                <p class="lead">Những cuốn sách mượn nhiều trong tuần</p>
            </div>
    <div class="owl-carousel owl-theme">
        @foreach($muonnhieu as $key => $value)
        <div class="item"><img src="{{asset('uploads/sach/'.$value->hinhanh)}}" width="223px" height="315px"><br><strong>{{$value->tensach}}</strong><br>{{$value->tentacgia}}<br><a href="{{url('chi-tiet/'.$value->slugsach)}}" class="btn btn-sm btn-outline-secondary">Chi tiết</a><small class="text-muted" style="margin-left:130px">9 mins</small>
</div>
        @endforeach
    </div>
    </section>
    <section>   
        <div class="text-center">

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title">Sách mới cập nhật</h2>
                        <span class="underline center"></span>
                        <p class="lead">Những cuốn sách mới nhất trong tuần qua.</p>
                    </div>
                    <div class="row">
                        @foreach($sach as $key => $value)
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset('uploads/sach/'.$value->hinhanh)}}" width="200px" height="300px">
                                <div class="card-body">
                                    <br>
                                    <p><strong>{{$value->tensach}}</strong></p>
                                    <p class="card-text">{{$value->tentacgia}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('chi-tiet/'.$value->slugsach)}}" class="btn btn-sm btn-outline-secondary">Chi tiết</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                <a href="" class="btn btn-sm btn-success">Xem tất cả</a>
                </div>
            </div>
        </div>
    </section>
@endsection
   