<?php
session_start();
if (isset($_GET['login'])){
    $username = $_SESSION['user_name'];
    echo "<script>alert(`Đăng nhập thành công! Xin chào ${username}`)</script>";
}

if (isset($_SESSION['user_name'])){
    require_once "controller/c_nv.php";
    if(isset($_GET['done'])){
        echo "<script>alert('Thành công!')</script>";
    }
    $url = isset($_GET['url']) ? $_GET['url'] : "/";
    switch ($url){
        case "/":
            echo listNV();
            break;
        case "add":
            echo addNV();
            break;
        case "edit":
            echo editNV();
            break;
        case "del":
            echo delNV();
            break;
        case "logout":
            session_destroy();
            header("location: index.php");
            break;
    }
}else{
    echo "<script>alert('Cần đăng nhập để xem trang!')</script>";
    require_once "controller/c_login.php";
    echo check_login();
}

