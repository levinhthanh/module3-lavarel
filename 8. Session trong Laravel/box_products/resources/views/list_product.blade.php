@extends('welcome')
@section('title', 'Danh sách sản phẩm')



@section('content')
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-branch">
                <img src="./logo.png" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarReponsive">
                <ul class="navbar-nav ml-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" id="user_name">Hi, {{ Auth::user()->name }}</a>
                        </li>
                        @if(Auth::user()->email === 'thanhle@gmail.com')
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">Manager</a>
                        </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <br>
    <p class="h2 text-danger text-center">DANH SÁCH SẢN PHẨM</p><br>
    <a class="d-block text-danger text-center" href="{{ route('view_box') }}">Xem giỏ hàng</a><br>
    @if(count($products) == 0)
        <tr>
            <td colspan="4">Không có sản phẩm</td>
        </tr>
    @else
        <div class="container">
            <div class="row row-cols-4">
                @foreach($products as $key => $product)
                    <div class="col">
                        <img class="img-fluid" src="{{ $product->image }}" alt="image">
                        <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                        <p>{{ $product->price }}đ</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

@endsection
