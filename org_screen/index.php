<?php
/**
 *
 */
session_start();
$org_id = $_SESSION['id'];

//以下是提取数据的方式
$i = 1;
do{
    @$get_data = get_data("activity_org","WHERE org = $org_id","id","name","introduction","data","pic","web","start_time","finish_time","view_count","state");
    echo 'id：'.$get_data['back1'],'<br/>';
    echo 'name：'.$get_data['back2'],'<br/>';
    echo 'introduction：'.$get_data['back3'],'<br/>';
    echo 'data：'.$get_data['back4'],'<br/>';
    echo 'pic：'.$get_data['back5'],'<br/>';
    echo 'web：'.$get_data['back6'],'<br/>';
    echo 'start_time：'.$get_data['back7'],'<br/>';
    echo 'finish_time：'.$get_data['back8'],'<br/>';
    echo 'view_count：'.$get_data['back9'],'<br/>';
    echo 'state：'.$get_data['back10'],'<br/>';
    echo '<hr/>';
    $i++;
}while($i<=2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生组织管理界面</title>
</head>
<body>

</body>
</html>