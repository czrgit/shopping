<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
	.order,.order th,.order td{border:solid 1px #339900; border-collapse:collapse; padding:14px; 10px;}
	.order th{background:#E8FBE1;}
	.order td{text-align:center;}

</style>
</head>

<body>
<?php
include '../inc/conn.php';
$sql="select * from goods";
$result=mysql_query($sql);
if($rs=mysql_fetch_array($result)){
	echo "<table class='order' width='600' align='center' border='0'>";
	echo "<tr><th>商品编号</th><th>商品名称</th><th>单价</th><th>库存</th><th>删除商品</th><th>修改商品</th></tr>";
	do{
		echo "<tr><td>".$rs['gid']."</td>";	
		echo "<td>".$rs['gname']."</td>";
		echo "<td>".$rs['gprice']."</td>";
		echo "<td>".$rs['gnum']."</td>";
		echo "<td><a href='delGoods.php?gid=".$rs['gid']."'>删除</a></td>";
		echo "<td><a href='allGoods_modify.php?gid=".$rs['gid']."'>修改</a></td>";
		echo "</tr>";
		}while($rs=mysql_fetch_array($result));
		echo "</table>";
	}else{
		echo "<h1>还没有商品</h1>";
		}


?>
</body>
</html>