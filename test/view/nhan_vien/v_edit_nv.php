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
<form method="post">
    <?php foreach ($nv_details as $key => $values){ ?>
    <table>
        <tr>
            <th>Tên</th>
            <td>
                <input name="ten_nv" value="<?= $values['ten_nv']?>">
            </td>
        </tr>

        <tr>
            <th>Lương</th>
            <td>
                <input name="luong" value="<?= $values['luong']?>">
            </td>
        </tr>
    </table>
    <?php }?>

    <button type="submit" name="btn_save">Lưu</button>
</form>
</body>
</html>

