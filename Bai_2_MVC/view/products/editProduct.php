<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>
</head>
<body>
<form method="post" action="" >
    <?php
        foreach ($product_details as $key => $values){
    ?>
    <table border="1">
        <tr>
            <th>Tên sản phẩm</th>
            <th>
                <input name="ten_san_pham" value="<?php echo $values['ten_san_pham']; ?>">
            </th>
        </tr>
        <tr>
            <th>Giá</th>
            <th>
                <input name="gia" value="<?php echo $values['gia']; ?>">
            </th>
        </tr>
    </table>
    <?php }?>

    <button type="submit" name="btn_edit">Lưu</button>
    <button type="submit" name="btn_cancel">Hủy</button>
    <button>
        <a href="index.php">Danh sách sản phẩm</a>
    </button>
</form>
</body>
</html>
