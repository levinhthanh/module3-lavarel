@extends('welcome')
@section('title', 'Danh sách sản phẩm')


@section('content')

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
