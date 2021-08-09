<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Thư viện Mini</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <nav>
            <div class="logo"> <a href="{{url('/')}}">Thư viện Mini</a></div>
            <ul>
                <li>
                    <a href="{{url('/')}}">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Danh mục sách</a>
                    <ul>
                        @foreach($danhmuc as $key => $value)
                        <li><a href="{{url('danh-muc/'.$value->slugdanhmuc)}}">{{$value->tendanhmuc}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a href="#" disabled>Thông tin cá nhân</a>
                    <ul>
                        <li>
                            <a href="{{url('/the-thanh-vien')}}">Thẻ thành viên </a>
                        </li>
                        <li>
                            <a href="{{url('/muon-sach')}}">Thông tin mượn</a>
                        </li>
                    </ul>
                </li>

                <li>
                    @guest
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                    @endif
                    @if (Route::has('register'))
                    <span style="color:white;">|<a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </span>
                    @endif
                    @else
                    <span style="color:white;">{{Auth::user()->name }}</span>
                    <span style="color:white;">|<a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="title">Logout</span></a>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                            @endguest
                </li>
            </ul>
        </nav>
    <div class="img">
        <div class="search-icon">
            <form action="{{url('tim-kiem')}}" method="get">
                @csrf
                <input type="search" name="tukhoa" placeholder="Tên sách,tên tác giả...">
                <input type="submit" class="btn" value="Tìm kiếm">
            </form>
        </div>
        </div>
    </div>

    <section style="margin-top: -10vh;height:auto">
        @yield('content2')
    </section>

    <footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
     
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fa fa-gem me-3"></i>Thư viện Mini
          </h6>
          <p>
          Cùng sách khám phá những chân trời
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Liên hệ
          </h6>
          <p><i class="fa fa-home me-3"></i> Đại học quốc gia Hà Nội</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            admin@gmail.com
          </p>
          <p><i class="fa fa-phone me-3"></i>0964875742</p>
        
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
  </div>
  <!-- Copyright -->
</footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4    
                }
            }
        })
    </script>

</body>
</html>