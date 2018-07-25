<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <title>Admin trang web bán cá cảnh hàng đầu Việt Nam</title>
</head>
<body>
<form action="/admin/product/store" method="POST">
    {{csrf_field()}}
    <div>
        <label>Tên</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Giá</label>
        <input type="text" name="price">
    </div>
    <div>
        <label>Chủng loại</label>
        <select name="categoryId">
            <option value="1">Cá Vàng</option>
            <option value="2">Ca kiếm</option>
            <option value="3">Cá Váy</option>
            <option value="4">Cá chọi</option>
        </select>
    </div>
    <div>
        <label>Mô tả</label>
        <input type="text" name="description">
    </div>
    <div>
        <label>Ảnh đại diện</label>
        <input type="text" name="image">
    </div>
    <div>
        <input type="submit" value="Lưu thông tin">
        <input type="reset" value="Làm lại">
    </div>
</form>
</body>
</html>