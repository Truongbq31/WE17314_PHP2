<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa nhân viên</title>
</head>
<body>
<form method="post">
    <?php foreach ($nv_detail as $key => $value){ ?>
    <table>
        <tr>
            <td>Họ tên</td>
            <td>
                <input name="ten_nv" value="<?= $value['ten_nv']?>">
            </td>
        </tr>

        <tr>
            <td>Lương</td>
            <td>
                <input name="luong" value="<?= $value['luong']?>">
            </td>
        </tr>
    </table>
    <?php } ?>
    <button type="submit" name="btn_save">Lưu</button>
    <button type="submit" name="btn_add">
        <a href="index.php">Danh sách nhân viên</a>
    </button>
</form>
</body>
</html>

