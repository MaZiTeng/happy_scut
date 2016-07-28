<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 16/7/19
 * Time: 下午7:46
 */
define("MYSQL_HOST"    	,'localhost');
define("MYSQL_USER"		,'root');
define("MYSQL_PASS"		,'');
define("MYSQL_DBNAME"	,'happy_scut');

//连接数据库
function connectDB(){
    $DB=new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DBNAME, MYSQL_USER , MYSQL_PASS);
    $DB->query("SET NAMES UTF8");
    return $DB;
}

//获取IP
function user_ip(){
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    }
    elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    }
    elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');

    }
    elseif (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//判断IP是否已注册
function judge_ip(){
    $DB = connectDB();
    $user_ip = user_ip();

    $sql = "SELECT * FROM `user` WHERE ip == $user_ip";
    $res = $DB->query($sql);

    if ($res->fetchColumn() > 0) {  //如果count(*)的值大于0，表示有结果。
        return 1;
    }else{
        return 0;
    }
}

//绑定IP
function register($ip){
    $DB = connectDB();
    $sql = "insert into `user` (ip) values ($ip)";
    $reslut = $DB->exec($sql);//返回影响了多少行数据
}