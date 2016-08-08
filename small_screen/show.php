<?php
/**
 * 显示活动
 */

$type = $_GET["type"];
$org = $_GET["org"];
$college = $_GET["college"];

if ($type == 1){   //学院内容
    if ($college == "all"){
        //获取学院全部活动信息
    }else{
        //查询表college的college_id为$college的前n条记录,时间降序.
        $i = 1;
        do{
            @$q = get_data("activity_college","WHERE ID = $i","name","introduction","org","data","pic","web","start_time","finish_time","view_count");
            echo '编号：'.$q['back1'],'<br/>';
            echo '活动名称：'.$q['back2'],'<br/>';
            echo '活动时间：'.$q['back3'],'<br/>';
            echo '活动内容：'.$q['back4'],'<br/>';
            echo '活动图片：'.$q['back5'],'<br/>';
            echo '报名链接：'.$q['back6'],'<br/>';
            echo '活动地点：'.$q['back7'],'<br/>';
            echo '地点纬度：'.$q['back8'],'<br/>';
            echo '地点经度：'.$q['back9'],'<br/>';
            echo '<hr/>';
            $i++;
        }while($i<=2);
    }
}elseif ($type == 2){
    if ($org == "all"){
        //获取组织全部活动信息
    }else{
        //查询表org中的org_id为$org的前n条记录
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <!--
        学院名称(type传的学院)
       学院简介(数据库?页面里?)
       type为all的时候不显示
       -->
</div>
<div>
    <!--
    列出该学院的活动（名称，起止时间，具体时间，地点，性质，主讲人，状态)
        每个项目有一个id,每个活动名称为一个链接,链接到detail.php?id = id.

    -->
</div>

</body>
