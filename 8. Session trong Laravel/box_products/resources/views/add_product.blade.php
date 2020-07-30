@extends('layouts.admin')

@section('title', 'Thêm sản phẩm')
@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm sản phẩm</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên sản phẩm</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Loại sản phẩm</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mô tả</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Ảnh 1</label>
                <input type="file" name="image1" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Ảnh 2</label>
                <input type="file" name="image2" class="form-control-file" required>
            </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>

@endsection
