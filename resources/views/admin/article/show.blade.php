<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <title>Admin trang web bán cá hàng đầu Việt Nam</title>
</head>
<body>
    <h1>Hiển thị thông tin của bài viết</h1>
    <ul>
        <li><a href="/admin/article/create">Tạo mới</a></li>
        <li><a href="/admin/article">Danh sách</a></li>
    </ul>
    <strong>{{$obj->title}}</strong>
    <i>{{$obj->description}}</i>
</body>
</html>