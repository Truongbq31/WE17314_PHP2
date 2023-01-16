<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url){
    case "/":
        //Điều hướng về trang danh sách sản phẩm
        require_once "controller/productController.php";
        echo listProduct();
        break;

    case "addProduct":
        require_once "controller/productController.php";
        echo addProducts();
        break;

    case "removeProduct":
        //Điều hướng về controller xóa
        require_once "controller/productController.php";
        echo removeProduct();
        break;

    case "editProduct":
        require_once "controller/productController.php";
        echo editProduct();
        break;
}
?>

