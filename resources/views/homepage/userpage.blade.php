<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico')}}" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- Mobile Menu -->
    <link href="{{ asset('css/mmenu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
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
                                            <div class="header-cart dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <small>0</small>
                                                </a>
                                                <div class="dropdown-menu cart-dropdown">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-01.jpg" alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-02.jpg" alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-03.jpg" alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="cart-total">
                                                        <div class="title">SubTotal</div>
                                                        <div class="price">$30.00</div>
                                                    </div>
                                                    <div class="cart-buttons">
                                                        <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                        <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index-2.html">Home</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="home-v2.html">Home V2</a></li>
                                            <li><a href="home-v3.html">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-list-view.html">Books &amp; Media</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                            <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                            <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                            <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                            <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="news-events-list-view.html">News &amp; Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
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
                                    <a href="index-2.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home V1</a></li>
                                        <li><a href="home-v2.html">Home V2</a></li>
                                        <li><a href="home-v3.html">Home V3</a></li>
                                    </ul>
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
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="signin.html">Signin/Register</a></li>
                                        <li><a href="404.html">404/Error</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid View</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
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
    <!-- End: Header Section -->

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">

        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="{{asset('images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">
                            <a href="#" class="btn btn-primary">Read More</a>
                            <a href="#" class="btn btn-default">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="{{asset('images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">
                            <a href="#" class="btn btn-primary">Read More</a>
                            <a href="#" class="btn btn-default">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="{{ asset('images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">
                            <a href="#" class="btn btn-primary">Read More</a>
                            <a href="#" class="btn btn-default">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
        <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
    </div>
    <!-- End: Slider Section -->

    <!-- Start: Search Section -->
    <section class="search-filters">
        <div class="container">
            <div class="filter-box">
                <h3>What are you looking for at the library?</h3>
                <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="sr-only" for="keywords">Search by Keyword</label>
                            <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <select name="catalog" id="catalog" class="form-control">
                                <option>Search the Catalog</option>
                                <option>Catalog 01</option>
                                <option>Catalog 02</option>
                                <option>Catalog 03</option>
                                <option>Catalog 04</option>
                                <option>Catalog 05</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <select name="category" id="category" class="form-control">
                                <option>All Categories</option>
                                <option>Category 01</option>
                                <option>Category 02</option>
                                <option>Category 03</option>
                                <option>Category 04</option>
                                <option>Category 05</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="submit" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End: Search Section -->

    <!-- Start: Welcome Section -->
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
        <div class="welcome-image"></div>
    </section>
    <!-- End: Welcome Section -->


    <!-- Start: Our Community Section -->
    <section class="community-testimonial">
        <!-- <div class="container">
            <div class="text-center">
                <h2 class="section-title">Words From our Community</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="owl-carousel">
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{ asset('images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
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
                        <img src="{{ asset('images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
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
        </div> -->
        <div class="container">
        </div class="text-center">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('uploads/sach/web34.jpg')}}" alt="">
                <h4>Phát triển ứng dụng web</h4>
            </div>
            <div class="item"><img src="{{asset('uploads/sach/web34.jpg')}}" alt="">
                <h4>Phát triển ứng dụng web</h4>
            </div>
            <div class="item"><img src="{{asset('uploads/sach/web34.jpg')}}" alt="">
                <h4>Phát triển ứng dụng web</h4>
            </div>
            <div class="item"><img src="{{asset('uploads/sach/web34.jpg')}}" alt="">
                <h4>Phát triển ứng dụng web</h4>
            </div>
            <div class="item"><img src="{{asset('uploads/sach/web34.jpg')}}" alt="">
                <h4>Phát triển ứng dụng web</h4>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('uploads/sach/web34.jpg')}}">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('uploads/sach/web34.jpg')}}">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('uploads/sach/web34.jpg')}}">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('uploads/sach/web34.jpg')}}">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Footer -->
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
                            <li><a href="index-2.html">Home</a></li>
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
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>


    <!-- jQuery UI -->
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{ asset('js/mmenu.min.js')}}"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="{{ asset('s/harvey.min.js')}}j"></script>

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

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            // nav:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>



</body>


</html>