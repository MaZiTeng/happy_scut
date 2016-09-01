<?php
/**
 *
 */
session_start();
//$org_id = $_SESSION['id'];

//以下是提取数据的方式
// $i = 1;
// do{
//     @$get_data = get_data("activity_org","WHERE org = $org_id","id","name","introduction","data","pic","web","start_time","finish_time","view_count","state");
//     echo 'id：'.$get_data['back1'],'<br/>';
//     echo 'name：'.$get_data['back2'],'<br/>';
//     echo 'introduction：'.$get_data['back3'],'<br/>';
//     echo 'data：'.$get_data['back4'],'<br/>';
//     echo 'pic：'.$get_data['back5'],'<br/>';
//     echo 'web：'.$get_data['back6'],'<br/>';
//     echo 'start_time：'.$get_data['back7'],'<br/>';
//     echo 'finish_time：'.$get_data['back8'],'<br/>';
//     echo 'view_count：'.$get_data['back9'],'<br/>';
//     echo 'state：'.$get_data['back10'],'<br/>';
//     echo '<hr/>';
//     $i++;
// }while($i<=2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../public/CSS/base.css">
    <link rel="stylesheet" type="text/css" href="../public/CSS/org/org_index.css">
    <title>学生组织管理界面</title>
</head>
<body>
    <div id = "main">
        <div id = "mes">
            <span>信息</span>
            <div id = "mes-main">
                <a class = "message">我是信息一</a>
                <a class = "message">我是信息二</a>
                <a class = "message">我是信息三</a>
                <a class = "message">我是信息四</a>
                <a class = "message">我是信息五</a>
            </div>
        </div>
        <div id = "act">
            <div class = "label">
                <span>活动</span>
                <a id = "act_add" href = "new_activity.php">添加</a>
            </div>
            <div class="act_list">
                <div id = "act_1">
                    <span id = "act_1_state" class = "act_state">状态一</span>
                    <div id = "act_1_label" class = "act_label"><h2>我是标题</h2></div>
                    <div id = "act_1_main" class = "act_main">
                        <p>信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~信息~~~~~~<p>
                    </div>
                </div>
            </div>
        </div>
        <div id = "act">
            <div class = "label">
                <span>社团信息</span>
                <a id = "act_add" href = "">编辑</a>
            </div>

            <div class="act_list">
                <div id = "act_1">
                    <div id = "act_1_main" class = "act_main">
                        <ul>
                            <li>社团名称：123</li>
                            <li>社团名称：123</li>
                            <li>社团名称：123</li>
                            <li>社团名称：123</li>
                            <li>社团名称：123</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- <div id = "org"></div> -->
        

    </div>
    <script src="//cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src = "../public/JS/org/index.js"></script>
</body>
</html>