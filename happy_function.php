<?php
/**
 * 主要功能函数
 */
define("MYSQL_HOST"    	,'localhost');
define("MYSQL_USER"		,'root');
define("MYSQL_PASS"		,'');
define("MYSQL_DBNAME"	,'happy_scut');


/**
 * 连接数据库
 * @return PDO
 */
function connectDB(){
    try{
        $DB=new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DBNAME, MYSQL_USER , MYSQL_PASS);
        $DB->query("SET NAMES UTF8");
        return $DB;
    }catch(PDOException $e){
        return $e->getMessage();
    }
}


/**
 * 从数据库中提取数据
 * @param $tb  数据库名
 * @param $limit  查询要求
 * @param $data1  查询字段
 * @param $data2
 * @param $data3
 * @param $data4
 * @param $data5
 * @param $data6
 * @param $data7
 * @param $data8  查询字段
 * @return array  返回用back1-8提取
 */
function get_data($tb,$limit,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12){
    try{
        $DB = connectDB();
        $sql="select * from $tb $limit";
        //$pdo->query($sql)，执行SQL语句，返回PDOStatement对象
        $stmt=$DB->query($sql);
        //var_dump($stmt);
        foreach($stmt as $row){
            $a = $row["$data1"];
            $b = $row["$data2"];
            $c = $row["$data3"];
            $d = $row["$data4"];
            $e = $row["$data5"];
            $f = $row["$data6"];
            $g = $row["$data7"];
            $h = $row["$data8"];
            $i = $row["$data9"];
            $j = $row["$data10"];
            $k = $row["$data11"];
            $l = $row["$data12"];
        }
        $query = array(
            'back1' => "$a",
            'back2' => "$b",
            'back3' => "$c",
            'back4' => "$d",
            'back5' => "$e",
            'back6' => "$f",
            'back7' => "$g",
            'back8' => "$h",
            'back9' => "$i",
            'back10' => "$j",
            'back11' => "$k",
            'back12' => "$l",
        );
        return $query;
    }catch(PDOException $e){
        return $e->getMessage();
    }
}


/**
 * 获取IP
 * @return string
 */
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


/**
 * 判断IP是否已注册
 * @return int
 */
function judge_ip(){

    $user_ip = user_ip();
   @$judge = get_data("student","WHERE ip = '$user_ip'","ip");
    if(empty($judge['back1'])){
        return 0;
    }else{
        return 1;
    }

}


/**
 * 绑定IP
 * @param $ip
 */
function register($ip){
    $DB = connectDB();
    $sql = "insert into `user` (ip) values ($ip)";
    $reslut = $DB->exec($sql);//返回影响了多少行数据
}


/**
 * 向数据库写入数据
 * @param $tb    表名
 * @param $field  字段名
 * @param $values  值
 * @return int   如果返回值不为1则出错
 */
function write_data($tb,$field,$values){
    try{
        $DB = connectDB();
        $sql="INSERT `$tb`($field) VALUES($values)";
        $res=$DB->exec($sql);
        return $res;
    }catch(PDOException $e){
        return $e->getMessage();
    }
}

/**
 * 更新数据表内容
 * @param $tb         数据表
 * @param $set        修改条件
 * @param $limit      条件
 * @return int|string
 */
function update($tb,$set,$limit){
    try{
        $DB = connectDB();
        $sql="UPDATE $tb SET $set $limit";
        $res=$DB->exec($sql);
        return $res;
    }catch(PDOException $e){
        return $e->getMessage();
    }
}