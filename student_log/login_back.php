<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 16/7/20
 * Time: 下午2:09
 */
require_once "../happy_function.php";


$num = $_POST['student_num'];
$student_name = $_POST['student_name'];

$DB = connectDB();


$sql = "SELECT * FROM `students` WHERE `num` == $num";
$res = $DB->query($sql);

//写入新纪录

$url = "small_screen_index.php";
header("location:{$url}");
