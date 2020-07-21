<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm khách hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
     #h1{
         text-align: center;
         margin-top: 2vw;
         font-weight: bold;
         color: darkred
     }
    </style>
</head>
<body>
    <div class="container">
     <h1 id="h1">THÊM KHÁCH HÀNG</h1>
    <form method="post" action="/add_process">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tên</label>
          <input type="text" class="form-control"  aria-describedby="emailHelp" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Ngày sinh</label>
          <input type="date" class="form-control" name="birthday" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="address">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Điện thoại</label>
            <input type="text" class="form-control" name="phone" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
        <button type="submit" class="btn btn-primary" style="width:15vw;margin-left:32vw;">Submit</button>
      </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
