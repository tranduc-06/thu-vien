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


    <footer class="footer">
        <div class="container">
            <div class="row">
                
                <div class="logo">Thư viện Mini</div></div>
               
                <div class="col-md-3">
                    <h5>Liên hệ</h5>
                    <ul>
                        <li>
                            0964875742 
                        </li>
                        <li>
                            admin@gmail.com
                        </li>

                    </ul>
                </div>
            </div>
        </div>
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