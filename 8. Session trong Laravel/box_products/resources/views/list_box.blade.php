@extends('welcome')
@section('title', 'Giỏ hàng')
@section('content')

    <br>
    <p class="h2 text-danger text-center">GIỎ HÀNG</p><br>
    <a class="d-block text-danger text-center" href="{{ route('view_list') }}">Quay lại danh sách</a><br>
    @if(count($array) == 0)

        <label class="d-block text-success text-center">Không có sản phẩm</label>

    @else
        <div class="container">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="w-25 text-center">Ảnh</th>
                        <th class="w-25 text-center">Tên sản phẩm</th>
                        <th class=" text-center">Giá</th>
                        <th class="w-25 text-center">Số lượng</th>
                        <th class=" text-center">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($array as $key => $product)
                        <tr id="{{ $product[0]->id }}">
                            <td class="w-25 text-center">
                                <img class="img-fluid w-50" src="{{ $product[0]->image }}" alt="image">
                            </td>
                            <td class="w-25 text-center">
                                {{ $product[0]->name }}
                            </td>
                            <td class=" text-center">
                                {{ number_format($product[0]->price) }}đ
                            </td>
                            <td class="w-25 text-center">
                                <button onclick="reduce_product({{ $product[0]->id }})">-</button>
                                <label id="input{{ $product[0]->id }}" class="w-25 text-center">{{ $product[1] }}</label>
                                <button onclick="increase_product({{ $product[0]->id }})">+</button>
                                <br><br>
                                <button onclick="delete_product({{ $product[0]->id }})"
                                    class="bg-danger text-white">Xóa</button>
                            </td>
                            <td class=" text-center">
                                {{ number_format($product[0]->price * $product[1]) }}đ
                            </td>
                        </tr>

                    @endforeach
                    <tr>
                        <td class="w-75 text-right" colspan="3">Tổng cộng</td>
                        <td class="w-25 text-center">
                            <label id="sum" class="w-25 text-center">0</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            window.onload= function(){
                calculation_sum();
            };

            function calculation_sum() {
                $.ajax({
                    url: '/sum',
                    type: 'get',
                    dataType: 'json',
                }).done(function(result) {
                    console.log(result);

                    $('#sum').html(result);
                });


            };

            function delete_product(id) {
                old = id;
                id = '#' + id;
                $(id).hide();
                $.ajax({
                    url: '/delete/' + old,
                    type: 'get',
                    dataType: 'json',
                }).done(function(result) {
                    alert(result);
                });
            };

            function increase_product(id) {
                old = id;
                id = '#' + id;
                $.ajax({
                    url: '/increase/' + old,
                    type: 'get',
                    dataType: 'json',
                }).done(function(result) {
                    console.log(result);

                    $('#input' + old).html(result);
                });
                calculation_sum();
            };

            function reduce_product(id) {
                old = id;
                id = '#' + id;
                $.ajax({
                    url: '/reduce/' + old,
                    type: 'get',
                    dataType: 'json',
                }).done(function(result) {
                    console.log(result);
                    $('#input' + old).html(result);
                });
                calculation_sum();
            };

        </script>
    @endif


@endsection
