<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            border: solid 0.1vw darkgray;
            padding: 1vw;

        }
        a{
            margin: 1vw;
            text-decoration: none;
        }
        .container{
            margin: auto;
            margin-top: 2vw;
            width: 45%;
        }
    </style>
</head>
<body>
    <div class="container">
     <h1>DANH SÁCH KHÁCH HÀNG</h1>
     <a href="/customer/add">ADD</a>|
     <a href="/customer/edit">EDIT</a>|
     <a href="/customer/delete">DELETE</a>
     <br><br>
     <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table><br>

    </div>
</body>
</html>
