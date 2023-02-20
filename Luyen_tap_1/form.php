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
<form method="post", action="c_person.php">
    <h1>Nhập thông tin sinh viên</h1>
    <table>
        <tr>
            <th>Họ tên</th>
            <th>
                <input type="text" name="ten" value="">
            </th>
        </tr>
        <tr>
            <th>Giới tính</th>
            <th>
                <select name="gioi_tinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <th>
                <input type="text" name="dia_chi" value="">
            </th>
        </tr>
        <tr>
            <th>Ngày sinh</th>
            <th>
                <input type="date" name="ngay_sinh" value="">
            </th>
        </tr>
        <tr>
            <th>Mã sinh viên</th>
            <th>
                <input type="text" name="masv" value="">
            </th>
        </tr>
        <tr>
            <th>Điểm trung bình</th>
            <th>
                <input type="number" name="dtb" value="">
            </th>
        </tr>
        <tr>
            <th>Email</th>
            <th>
                <input type="email" name="email" value="">
            </th>
        </tr>

        <tr>
            <th>
                <button type="submit" name="btn_add">Thêm</button>
            </th>
        </tr>
    </table>

</form>

</body>
</html>
