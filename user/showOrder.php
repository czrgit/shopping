<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的订单</title>
	<style type="text/css">
	.order,.order th,.order td{border:solid 1px #339900; border-collapse:collapse; padding:14px; }
	.order th{background:#E8FBE1;}
	.order td{text-align:center;}



</style>
</head>

<body>
<?php
include "../inc/head2.php";
include '../inc/conn.php';
$uid=$_SESSION['uid'];
$sql="select oid,gname,gprice,onum,otime,uRealName,uTel,buyType from goodsorder,userform,goods where goodsorder.uid=userform.uid and goodsorder.gid=goods.gid and goodsorder.uid=".$uid;
$result=mysql_query($sql);
	if(@$rs=mysql_fetch_array($result)){
		$sum=0;
		$num=0;
		echo '<table class="order" width="900" align="center" border="0">';
		echo "<tr><th>订单号</th><th>商品名称</th><th>单价</th><th>数量</th><th>下单时间</th><th>姓名</th><th>电话</th><th>付款方式</th></tr>";
		do{
			echo "<tr><td>".$rs['oid']."</td>";
			echo "<td>".$rs['gname']."</td>";
			echo "<td>".$rs['gprice']."</td>";
			echo "<td>".$rs['onum']."</td>";
			echo "<td>".$rs['otime']."</td>";
			echo "<td>".$rs['uRealName']."</td>";
			echo "<td>".$rs['uTel']."</td>";
			echo "<td>".$rs['buyType']."</td>";
			echo "</tr>";
			$sum +=$rs['gprice'] * $rs['onum'];
			$num++;
			}while($rs=mysql_fetch_array($result));
			echo "<tr><td colspan='10'>总共有".$num."个订单，总金额为：￥".$sum."元</td></tr>";
			echo "</table>";
	}else{
		echo "<h1>还没有下单！</h1>";
		}
?>
<?php
include "../inc/footer.html";
?>
</body>
</html>