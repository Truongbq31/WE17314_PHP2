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
<a href="index.php?url=add">Thêm nhân viên</a>
<a href="index.php?url=logout">Đăng xuất</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Lương</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($nhan_vien as $key => $value){ ?>
    <tr>
        <td><?= $value['id']?></td>
        <td><?= $value['ten_nv']?></td>
        <td><?= $value['luong']?></td>
        <td>
            <button>
                <a href="index.php?url=edit&id_nv=<?= $value['id']?>">Sửa</a>
            </button>

            <button onclick="return confirm('Chắc chắn xóa?')">
                <a href="index.php?url=del&id_nv=<?= $value['id']?>">Xóa</a>
            </button>
        </td>
    </tr>
    <?php }?>
</table>
</body>
</html>
