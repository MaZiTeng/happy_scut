<?php
/**
 * 学生注册后台
 * 对比姓名和学号
 */
header('content-type:text/html;charset=utf-8');
require_once "../happy_function.php";
session_start();

$num = $_POST['student_num'];
$student_name = $_POST['student_name'];
$ip = user_ip();

$get_num = get_data("student","WHERE num = $student_name","name");
if($get_num['name'] != $student_name){
    echo "姓名与学号不符";
    $url = "login.php";
}

elseif(empty($get_num['name'])){
    $new_one = write_data("student","name,ip,num","'$student_name','$ip','$num'");
    echo "注册成功";
    $_SESSION['name'] = $student_name;
    $url = "../student_screen/index.php";
}

elseif($get_num['name'] == $student_name){
    $update = update("student","ip = '$ip'","WHERE num = '$student_name'");
    $_SESSION['name'] = $student_name;
    $url = "../student_screen/index.php";
}




header("Refresh:4;url={$url}");
