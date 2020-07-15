<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính chiết khấu</title>
</head>
<body>
    <h1>Thông tin sản phẩm</h1>
    <form action="/calculator" method="POST">
        @csrf
        <p>
            <input type="text" name="description" placeholder="Product Description:">
        </p>
        <p>
            <input type="text" name="price" placeholder="List Price: ">
        </p>
        <p>
            <input type="text" name="discount" placeholder="Discount Percent: ">
        </p>
        <p>
            <button type="submit">Tính chiết khấu</button>
        </p>
    </form>
</body>
</html>