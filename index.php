<?php
/**
 * 程序入口
 * 判断终端
 */


//基本功能:
require_once "happy_function.php";

//判断终端:
require_once "judge_screen.php";

if(screen() == 1){
    $url = "student_log/login.php";
}elseif (screen() == 2){
    $url = "teacher_log/login.php";
}else{
    $url = "choose_screen_index.php";
}
header("Location:{$url}");

?>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>
        欢迎来到
    </title>
</head>
<body>
    <h1>
            正在加载中......
    </h1>
</body>
</html>