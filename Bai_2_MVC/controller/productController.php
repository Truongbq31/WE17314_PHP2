<?php
require_once "models/m_products.php";
// Hàm danhSachProduct
function listProduct(){
    //gọi models
    $products = getProduct();
    include_once "views/products/listProducts.php";
}
function removeProduct(){
    delete_product();
    header("location: index.php?url=/");
    die();
}
function addProducts(){
    add_product();
    include_once "views/products/addProduct.php";
    die();
}
function editProduct(){
    $product_details = getProduct_by_id();
    edit_product();
    include_once "views/products/editProduct.php";
    die();
}
?>
