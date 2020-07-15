<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ứng dụng từ điển</title>
</head>
<body>
    <h1>Dictionary Application</h1>
    <form action="/dictionary" method="POST">
        @csrf
        <p>
            <input type="text" name="english" placeholder="Nhập từ bạn muốn dịch:">
        </p>
        <p>
            <button type="submit">Translate</button>
        </p>
    </form>
</body>
</html>