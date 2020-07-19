<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid 0.1vw darkgray;
            border-collapse: collapse;
        }

        td {
            border: solid 0.1vw darkgray;
            padding: 0.5vw;
        }
        #btn {
            margin: 1vw;
            margin-left: 11vw;
            width: 5vw;
        }
    </style>
</head>

<body>
    <?php
    if ($id === '1') {
        $name = 'Nguyễn Văn A';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if ($id === '2') {
        $name = 'Nguyễn Văn B';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if ($id === '3') {
        $name = 'Nguyễn Văn C';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if ($id === '4') {
        $name = 'Nguyễn Văn D';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    if ($id === '5') {
        $name = 'Nguyễn Văn E';
        $phone = '01234567890';
        $email = 'email.test@mail.com';
    }
    ?>
    <h1>Chỉnh sửa thông tin khách hàng</h1>
    <form action="customer/{{$id}}/edit" method="post">
        <table>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="name" placeholder="<?=$name?>"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="phone" placeholder="<?=$phone?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="<?=$email?>"></td>
            </tr>
        </table>
        <input id="btn" type="submit" value="Edit">
    </form>
</body>

</html>