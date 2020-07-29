@extends('welcome')
@section('title', 'Chi tiết sản phẩm')
@section('content')

    <br>
    <p class="h2 text-danger text-center">CHI TIẾT SẢN PHẨM</p><br>

    <div class="container">
        <a class="d-block text-danger text-center" href="{{ route('view_list') }}">Quay lại danh sách</a><br>
        <div class="d-flex justify-content-center bd-highlight text-center ml-10">
            <div class="p-2 w-25 bd-highlight">
                <img class="img-fluid w-70" src="/{{ $product->image }}" alt="image"><br>
                <label>Mã sản phẩm:</label>
                <label>A00{{ $product->id }}</label><br>
                <label>Giá bán:</label>
                <label>{{ $product->price }}đ</label>
                <form action="/add/{{ $product->id }}" method="get">
                    <input type="submit" value="Thêm vào giỏ hàng">
                </form><br>
                <form action="/view_box" method="get">
                    <input type="submit" value="Xem giỏ hàng">
                </form><br>
            </div>
            <div class="p-2 w-25 bd-highlight">
                <p class="h3 text-warning text-center">{{ $product->name }}</p>
                <p class="h4 text-center">Số lượng : {{ $count ?? ''}}</p>
            </div>

        </div>
    </div>



@endsection
