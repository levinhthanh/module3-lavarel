<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
    <style>
        #img_info{
            width: 5vw;
            height: 5vw;
        }
        #table_list{
            width: 70%;
            margin: auto;
        }
        #label_list{
            font-size: 3vw;
            display: block;
            text-align: center;
            margin: 2vw 0;
            color: darkred;
        }
        #label_home{
            font-size: 1vw;
            display: block;
            text-align: center;
            margin: 1vw 0;
            color: blue;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="title m-b-md" id="label_list">
           ~ Tasks List ~
           <br>
           <a id="label_home" href="{{ route('welcome') }}">< Home</a>
        </div>

        @if(!isset($tasks))
    <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
@else
    <table class="table table-bordered" id="table_list">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task title</th>
            <th scope="col">Content</th>
            <th scope="col">Created</th>
            <th scope="col">Due Date</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        {{-- Kiểm tra, nếu biến tasks có số lượng bằng 0 (Không có task nào) thì trả về thông báo --}}
        @if(count($tasks) == 0)
            <tr>
                <td colspan="5"><h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5></td>
            </tr>
        @else
             {{-- Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng --}}
            @foreach($tasks as $key => $task)
                <tr>
                    <td scope="row">{{ ++$key }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->creat_day }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td><img id="img_info" src="storage/images/{{ $task->image }}" alt="" srcset=""></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endif

    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
