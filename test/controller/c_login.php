<?php
//session_start();
require_once "models/m_login.php";
function check_login(){
    $account = login();
//    var_dump($account);
    if (isset($_POST['btn_login'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $count = 0;
        foreach ($account as $key => $value){
            if ($user_name == $value['user_name'] && $password == $value['password']){
                $_SESSION['user_name'] = $value['user_name'];
                header("location: index.php?login=?");
            }else{
                $count++;
            }
        }
        if($count!=0){
            echo "<script>alert('Đăng nhập thất bại!')</script>";
        }
    }

    include_once "view/login/v_login.php";
}
