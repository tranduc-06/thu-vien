@extends('layouts.user')
@section('content2')
    <section class="welcome-section">
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
    </section>
    <!-- End: Welcome Section -->


    <!-- Start: Our Community Section -->
    <section class="community-testimonial">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Sách mượn nhiều</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="owl-carousel">
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{ asset('uploads/sach/tienganh32.jpg')}}" alt="Book Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student)</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <section>   
        <div class="text-center">

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title">Sách mới cập nhật</h2>
                        <span class="underline center"></span>
                        <p class="lead">Những cuốn sách được mượn nhiều nhất trong tuần qua.</p>
                    </div>
                    <div class="row">
                        @foreach($sach as $key => $value)
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset('uploads/sach/'.$value->hinhanh)}}">
                                <div class="card-body">
                                    <h5>{{$value->tensach}}</h5>
                                    <p class="card-text">{{$value->tomtat}}</p>
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
                </div>
            </div>
        </div>
    </section>
@endsection
   