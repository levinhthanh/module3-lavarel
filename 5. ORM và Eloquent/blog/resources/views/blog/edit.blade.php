@extends('home')

@section('title', 'Cập nhật bài viết')


@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Cập nhật bài viết</h2>

      </div>

      <div class="col-md-12">

          <form method="post" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                  <label>Tên bài viết</label>

                  <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>

              </div>

              <div class="form-group">

                  <label>Nội dung</label>

                  <textarea class="form-control" rows="3" name="content"  required>{{ $blog->content }}</textarea>

              </div>

              <div class="form-group">

                <label for="exampleFormControlFile1">Ảnh 1 (bắt buộc)</label>

                <input type="file" name="image1" class="form-control-file" required>

            </div>

            <div class="form-group">

              <label for="exampleFormControlFile1">Ảnh 2</label>

              <input type="file" name="image2" class="form-control-file" required>

          </div>

              <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

          </form>

      </div>

  </div>


@endsection
