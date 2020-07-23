@extends('home')
@section('title', 'Danh sách bài viết')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách bài viết</h1>
            </div>
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
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Ngày đăng</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($blogs) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($blogs as $key => $blog)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td><a href="{{ route('blog.read', $blog->id) }}">{{ $blog->title }}</a></td>
                                @foreach($categories as $key1 => $category)
                                    @if ($category->id === $blog->category_id)
                                        <td>{{ $category->name }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $blog->created_at }}</td>
                                <td><a href="{{ route('blog.edit', $blog->id) }}">sửa</a></td>
                                <td><a href="{{ route('blog.destroy', $blog->id) }}" class="text-danger"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('blog.create') }}">Thêm mới</a>
            <a class="btn btn-secondary" href="/" style="margin-left: 2vw">Trang chủ</a>
        </div>
    </div>
@endsection
