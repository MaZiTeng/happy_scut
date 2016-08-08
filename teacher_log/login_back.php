<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 16/7/20
 * Time: 下午2:09
 */
require_once "../happy_function.php";

header('content-type:text/html;charset=utf-8');
$name = $_POST['name'];
$pw = $_POST['pw'];
//判断登陆

@$data = get_data("teacher","WHERE name = '$name'","pw","type","id");

if(empty($type = $data['back2'])){                                        //判断是否存在该用户
    echo "<h1>用户名错误！</h1>";
    $url = "login.php";
}elseif($data['back1'] != $pw) {                                 //判断密码是否正确
    echo "<h1>密码错误！</h1>";
    $url = "login.php";
}else {
    session_start();
    $_SESSION['id'] = $data['back3'];
    $_SESSION['type'] = $type;
    echo "<h1>登录成功</h1>";
    if($type == "teacher"){
        $url = "../teacher_screen/index";
    }elseif($type == "org"){
        $url = "../org_screen/index";
    }elseif($type == "admin"){
        $url = "../admin_screen/index";
    }
};


header("Refresh:4;url={$url}");

