<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include 'inc/head.php';
if(isset($_SESSION['user'])){
	include 'inc/conn.php';
	date_default_timezone_set("Asia/Shanghai");
	$gid=$_POST['gid'];
	$num=$_POST['num'];
	$buyType=$_POST['buyType'];
	$t=date("Y-m-d H:i:s",time());
	$sql="insert into goodsorder(gid,uid,onum,otime,buyType) values('".$gid."','".$_SESSION['uid']."','".$num."','".$t."','".$buyType."')";
	if(mysql_query($sql)){
		echo "<h1>订单添加成功！！<a href='user/showOrder.php'>立即查看订单</a></h1>";
		header("refresh:5;url=user/showOrder.php");
		}
	}else{
		echo "<h1>您还没有登陆，<a href='user/login.php'>请先登陆再购买。</h1>";
		
		}

?>
</body>
</html>




