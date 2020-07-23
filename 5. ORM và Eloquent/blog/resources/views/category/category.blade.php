@extends('home')
@section('title', 'Danh sách danh mục')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Danh sách danh mục</h1></div>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>
          <table class="table table-striped">
          <thead>
          <tr>
                <th scope="col">#</th>
                <th scope="col">Tên danh mục</th>
                <th></th>
                <th></th>
          </tr>
          </thead>
          <tbody>
          @if(count($categories) == 0)
          <tr><td colspan="4">Không có dữ liệu</td></tr>
          @else
                @foreach($categories as $key => $category)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td><a href="{{ route("category.read",$category->id) }}">{{ $category->name }}</a></td>
                      <td><a href="{{ route('category.edit', $category->id) }}">sửa</a></td>
                      <td><a href="{{ route('category.destroy', $category->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
                @endforeach
          @endif
          </tbody>
          </table>
          <a class="btn btn-primary" href="{{ route('category.create') }}">Thêm mới</a>
          <a class="btn btn-secondary" href="/" style="margin-left: 2vw">Trang chủ</a>
          </div>
      </div>
@endsection
