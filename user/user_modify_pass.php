<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改用户信息</title>
</head>

<body>
<?php
include "../inc/head2.php";
include '../inc/conn.php';
$sql="update userform set uName='".$_POST['name']."',uRealName='".$_POST['xm']."',uTel='".$_POST['tel']."',uAddr='".$_POST['dz']."' where uid='".$_GET['uid']."'";
$result=mysql_query($sql);
if($result){
	echo "<h2>修改成功！！</h2>";
	header("refresh:1;url=../index.php");
	}

?>
</body>
</html>