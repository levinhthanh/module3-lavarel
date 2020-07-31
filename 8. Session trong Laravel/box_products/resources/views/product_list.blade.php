@extends('layouts.admin')

@section('title', 'Bảng danh sách sản phẩm')


@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <table class="table table-striped" id="users" style="width: 100%;">
            <thead>
                <tr id="list-header">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <button type="button" class="btn btn-primary" id="btnReloadData">Reload data</button>
    </div>
@endsection
