<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
</head>
<body>
    <h1>Kết quả tính chiết khấu</h1>
    <p>Mô tả sản phẩm: {{ $productDescription }}</p>
    <p>Giá:{{ $price }}</p>
    <p>Giá chiết khấu:{{ $discountPercent }}</p>
    <p>Phần trăm chiết khấu:{{ $discountAmount }}</p>
    <p>Chiết khấu:{{ $discountPrice }}</p>
</body>
</html>