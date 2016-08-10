<?php
/**
 * 已确定为移动端
 * 学生登录
 * 判断ip是否注册
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
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
        <button type="submit">确定</button>
    </form>





<?php
    register($user_id);
}elseif ($judge_ip == 1){             //已绑定,登录系统
    echo "正在登录！";
    $url = "../student_screen/index.php";
    header("Refresh:4;url={$url}");
}
?>
</body>
</html>
