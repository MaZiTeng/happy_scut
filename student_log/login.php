<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
/**
 * 移动端的页面设计
 */
session_start();
require_once "../happy_function.php";

//检测IP并判断是否绑定
$user_id = user_ip();
$judge_ip = judge_ip();
if($judge_ip == 0){                   //未绑定,绑定IP
    ?>
    <form action="login_back.php" method="post">
        学号：<input type="text" id="student_num" name="student_num" value="请输入您的学号"><br/>
        姓名：<input type="text" id="student_name" name="student_name" value="请输入您的姓名"><br/>
        <button type="submit">确定</button>    <!--当点击确定时弹出对话框提示只能绑定一个用户,请确定-->
    </form>





<?php
    register($user_id);
}elseif ($judge_ip == 1){             //已绑定,登录系统
    $url = "small_screen_index.php";
    header("location:{$url}");
}
?>
</body>
</html>
