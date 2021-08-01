<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>
    <header id="header-v1" class="navbar-wrapper" style = "background-image: url('images/header-slide.jpg')">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="{{url('/')}}">
                                            <img src="{{ asset('images/libraria-logo-v1.png')}}" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                            <span>/</span>
                                            <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="topbar-links">
                                            <a href="{{ route('login') }}"><i class="fa fa-lock"></i>Login</a>
                                            <span>|<a href="" {{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();""> <i class=" fa fa-lock"></i>Logout</a> </span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{url('/')}}">Home</a>

                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Danh mục sách</a>
                                        <ul class="dropdown-menu">
                                            @foreach($danhmuc as $key => $value)
                                            <li><a href="{{url('danh-muc/'.$value->slugdanhmuc)}}">{{$value->tendanhmuc}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="news-events-list-view.html">News &amp; Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Thông tin cá nhân</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog.html">Thẻ thành viên</a></li>
                                            <li><a href="{{url('muon-sach')}}">Thông tin mượn</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}">Home</a>

                                </li>
                                <li>
                                    <a href="books-media-list-view.html">Books &amp; Media</a>
                                    <ul>
                                        <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                        <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                        <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                        <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="news-events-list-view.html">News &amp; Events</a>
                                    <ul>
                                        <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                        <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="signin.html">Signin/Register</a></li>
                                        <li><a href="404.html">404/Error</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="blog.html">Thông tin cá nhân</a>
                                    <ul>
                                        <li><a href="#">Thẻ thành viên</a></li>
                                        <li><a href="#">Thông tin mượn</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <section>
        <div class="text-center">

            <div class="album py-5 bg-light">
                <div class="container">
                    @php
                    $count = count($sach);
                    @endphp
                    @if($count==0)
                    <p>Sách đang cập nhật</p>
                    @else

                    <div class="text-center">
                        <h2 class="section-title"></h2>
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
                    @endif
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About Libraria</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <span class="underline left"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="#">Library News</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Meet Our Staff</a></li>
                                    <li><a href="#">Board of Trustees</a></li>
                                    <li><a href="#">Budget</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Timing</h3>
                            <span class="underline left"></span>
                            <div class="timming-text-widget">
                                <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                <ul>
                                    <li><a href="#">Closings</a></li>
                                    <li><a href="#">Branches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div class="widget twitter-widget">
                            <h3 class="footer-widget-title">Latest Tweets</h3>
                            <span class="underline left"></span>
                            <div id="twitter-feed">
                                <ul>
                                    <li>
                                        <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                    </li>
                                    <li>
                                        <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-text col-md-3">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                    <div class="col-md-9 pull-right">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                            <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                            <li><a href="#">Kids &amp; Teens</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


    <!-- Mobile Menu -->

    <script type="text/javascript" src="{{ asset('js/mmenu.min.js')}}"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="{{ asset('js/harvey.min.js')}}"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js')}}"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="{{ asset('js/facts.counter.min.js')}}"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="{{ asset('js/mixitup.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="{{asset('js/accordion.min.js')}}"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="{{asset('js/responsive.tabs.min.js')}}"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="{{asset('js/responsive.table.min.js')}}"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="{{asset('js/masonry.min.js')}}"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="{{asset('js/carousel.swipe.min.js')}}"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>

</html>