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
<a href="index.php?url=addProduct">Thêm sản phẩm</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Hành động</td>
        </tr>

        <?php foreach ($products as $key => $value){ ?>
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['ten_san_pham'];?></td>
            <td><?php echo number_format($value['gia']);?> VNĐ</td>
            <td>
                <button>
                    <a href="index.php?url=editProduct&id=<?= $value['id']?>">Sửa</a>
                </button>
                <button onclick="return confirm('Chắc chắn xóa?')">
                    <a href="index.php?url=removeProduct&id=<?= $value['id']?>">Xóa</a>
                </button>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>
