<?php
//$a = "FPT POLYTECHNIC";
//$b = "CĐ ";
//
//echo $b .$a;
//echo "</br>";

//Mảng một chiều (Tuần tự)
//$mang = [1,2,3,4,5,6,7];
//echo $mang[5];
//echo "</br>";
//echo $mang[6];
//echo "</br>";
//
//foreach ($mang as $value){
//    if ($value % 2 == 0){
//        echo "</br>";
//        echo $value;
//    }
//}

//Mảng liên hợp $key=>$value
$mangLH = ["G" => 10, "F" => 3, "H" => 9, "J" => 4];
//echo $mangLH["F"] . "</br>" . $mangLH["J"];

$color = [
        "green" =>  "xanh lá",
    "blue" => "xanh dương",
    "red" => "đỏ"
]

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1 - Ôn tập</title>
</head>
<body>
<table border="1">
    <?php foreach ($color as $key => $value){ ?>
    <tr>
        <td bgcolor="<?php echo $key;?>"> <?php echo $value;?> </td>
    </tr>
    <?php }?>
</table>

</body>
</html>
