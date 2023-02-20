<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17314";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

//Tất cả những gì chung của dự án viết vào đây
const BASE_URL = "http://localhost/WE17314_PHP2/Base_MVC/";

function deleteSection(){
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
    unset($_SESSION['delete']);
}

function route($name){
    return BASE_URL.$name;
}
function rediriect($key, $msg, $route){
    $_SESSION[$key] = $msg;
    switch ($key){
        case "success":
            unset($_SESSION['errors']);
            break;
        case "errors":
            unset($_SESSION['success']);
            break;
    }
    header("location:".$route."?msg=".$key);
    die();
}

