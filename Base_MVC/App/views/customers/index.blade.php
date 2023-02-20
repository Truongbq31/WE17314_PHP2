<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Tên</td>
    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->ten_kh}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
