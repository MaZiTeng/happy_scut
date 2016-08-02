<?php
/**
 * 显示具体的活动
 */
require_once "../happy_function.php";
$id= $_GET['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>活动 <?php echo $id  ?></title>
</head>
<body>

<div>

    <?php
    $DB = connectDB();
    $sql = "SELECT * FROM `activity` WHERE `id` == $id";
    $res = $DB->query($sql);
    ?>

</div>

</body>
</html>