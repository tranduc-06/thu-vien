@extends('layouts.app')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content')

<body>
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-user-o" aria-hidden="true"></i>
                        </span>
                        <span class="title">Adminghjhjghjg</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-home" aria-hidden="false"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-list" aria-hidden="true"></i>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i>
                        </span>
                        <span class="title">Book</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-reply-all" aria-hidden="true"></i>
                        </span>
                        <span class="title">Borrow</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-id-card" aria-hidden="true"></i>
                        </span>
                        <span class="title">Member</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i>
                        </span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="toggle" onclick="toggleMenu()"><i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </div>

    <script type="text/javascript">
        function toggleMenu() {
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('ative');
            toggle.classList.toggle('ative');
        }
    </script>
</body>
@endsection