@extends('layouts.app')

@section('content')

<div class="container" style="margin-left:0;">
    <div class="row" style="width:100vw;">
        <div class="sidebar">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="{{url('/home')}}">
                            <span class="icon"><img src="{{asset('images/favicon.ico')}}"</i>
                            </span>
                            <span class="title">Libraria</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.index')}}">
                            <span class="icon"><i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showcategory()">
                            <span class="icon"><i class="fa fa-list" aria-hidden="true"></i>
                            </span>
                            <span class="title">Category</span>
                            <span class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <ul class="category-show">
                            <li><a href="{{route('danhmucsach.create')}}"><span class="title">Add category</span></a></li>
                            <li><a href="{{route('danhmucsach.index')}}"><span class="title">Show category</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#" onclick="showbook()">
                            <span class="icon"><i class="fa fa-book" aria-hidden="true"></i>
                            </span>
                            <span class="title btn-book">Book</span>
                            <span class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <ul class="book-show">
                            <li><a href="{{route('sach.create')}}"><span class="title">Add Book</span></a></li>
                            <li><a href="{{route('sach.index')}}"><span class="title">Show Book</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('quanlymuonsach/require')}}">
                            <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i>
                            </span>
                            <span class="title">Require</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('quanlymuonsach')}}">
                            <span class="icon"><i class="fa fa-reply-all" aria-hidden="true"></i>
                            </span>
                            <span class="title">Borrow</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('thanhvien.index')}}">
                            <span class="icon"><i class="fa fa-id-card" aria-hidden="true"></i>
                            </span>
                            <span class="title">Member</span>
                        </a>
                    </li>
                    <li style="display:flex;">
                        <a href="#" style="width:60px;">
                            <span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                            </span>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="title">Sign out</span></a>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="toggle" onclick="toggleMenu()"><i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            <script type="text/javascript">
                function toggleMenu() {
                    let navigation = document.querySelector('.navigation');
                    let toggle = document.querySelector('.toggle');
                    navigation.classList.toggle('ative');
                    toggle.classList.toggle('ative');
                }

                function showcategory() {
                    let category = document.querySelector('.category-show');
                    category.classList.toggle('show');

                }

                function showbook() {
                    let book = document.querySelector('.book-show');
                    book.classList.toggle('show');
                }
            </script>
        </div>


        <div class="content col-md-9">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                @yield('content1')
            </div>
        </div>
    </div>
</div>
</div>
@endsection