<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include '../inc/conn.php';
$oid =$_GET['oid'];
$sql="delete from goodsorder where oid=".$oid;
$result=mysql_query($sql);
if($result){
	echo "<h1>删除成功</h1>";
	header("refresh:1;url=showOrder.php");
	}
?>
</body>
</html>