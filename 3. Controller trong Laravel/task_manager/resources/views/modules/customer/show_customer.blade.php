<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid 0.1vw darkgray;
            border-collapse: collapse;
        }
        td{
            border: solid 0.1vw darkgray;
            padding: 0.5vw;
        }
    </style>
</head>
<body>
    <?php
    if($id === '1'){
        $name = 'Nguyễn Văn A';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if($id === '2'){
        $name = 'Nguyễn Văn B';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if($id === '3'){
        $name = 'Nguyễn Văn C';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if($id === '4'){
        $name = 'Nguyễn Văn D';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if($id === '5'){
        $name = 'Nguyễn Văn E';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    ?>
    <h1>Thông tin khách hàng</h1>
    <table>
        <tr>
            <td>Tên</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>{{$phone}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$email}}</td>
        </tr>
    </table>
</body>
</html>