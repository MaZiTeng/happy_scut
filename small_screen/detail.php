<?php
/**
 * 显示具体的活动
 */
require_once "../happy_function.php";
$id= $_GET['id'];
session_start();
$type = $_SESSION['type'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>活动 <?php echo $id ;?></title>
</head>
<body>

<div>

    <?php
    $get_data = get_data("")
    ?>

</div>


<!------此div只有type为teacher的才能看到        ---->
<div>
    <form action="../teacher_screen/check.php">
        结果
        批语<input type="text">
        <button type="submit">提交</button>
    </form>
</div>



</body>
</html>