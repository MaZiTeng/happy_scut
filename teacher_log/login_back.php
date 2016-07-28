<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 16/7/20
 * Time: 下午2:09
 */
require_once "../happy_function.php";


$type = $_POST['type'];
$name = $_POST['name'];
$pw = $_POST['pw'];

$DB = connectDB();


$sql = "SELECT * FROM `teachers` WHERE name == $name";
$res = $DB->query($sql);
//判断登陆

$url = "big_screen_index.php";
header("location:{$url}");
