<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhân viên</title>
</head>
<body>
<a href="index.php?url=addNhanVien">Thêm nhân viên</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên</td>
        <td>Lương</td>
        <td>Hành động</td>
    </tr>
    <?php foreach ($nhan_vien as $key => $value){ ?>
    <tr>
        <td><?= $value['id']; ?></td>
        <td><?= $value['ten_nv']; ?></td>
        <td><?= number_format($value['luong']); ?> VNĐ</td>
        <td>
            <button onclick="return confirm('Chắc chắn xóa?')">
                <a href="index.php?url=deleteNhanVien&id=<?= $value['id']?>">Xóa</a>
            </button>

            <button>
                <a href="index.php?url=editNhanVien&id=<?= $value['id']?>">Sửa</a>
            </button>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
