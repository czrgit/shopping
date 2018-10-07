
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	include "../inc/conn.php";
	include"../inc/global.php";
@$sql_modify="update goods set gname='".$_POST['gname']."',gpic='".$_POST['gpic']."',gprice='".$_POST['gprice']."',gnum='".$_POST['gnum']."',ginfo='".$_POST['ginfo']."' where gid='".$_GET['gid']."'";
$rs=mysql_query($sql_modify);
	if($rs){
			echo "<h1>修改成功！！！</h1>";
			header("refresh:1;url=allGoods.php");
	}
?>
</body>
</html>