<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品详细页</title>
</head>
<style type="text/css">
.box{width:980px; margin:0 auto;}
.box .left{float:left;}
.box .right{width:450px; border:solid 2px #39AE33; margin-bottom:20px; padding:20px; float:right;}
.box right li{line-height:200%;}
</style>
<body>
<?php 
 include 'inc/head.php';
?>
<div class="box">
	<form method="post" action="addOrder.php">
    <?php
	include 'inc/conn.php';
	$gid=$_GET['gid'];
	$result=mysql_query("select * from goods where gid=".$gid."");
	while($rs=mysql_fetch_array($result)){
		echo "<div class='left'><img src='pics/".$rs['gpic']."'/></div>";
		echo "<div class='right'>
			<ul>
				<li>商品名称：".$rs['1']."</li>
				<li>商品单价：".$rs['3']."</li>
				<li>商品库存：".$rs['4']."</li>
				<li>商品简介：".$rs['5']."</li>
				<li>购买数量：<input type='text' name='num'/></li>
				<li>付款方式：<input type='radio' name='buyType' value='货到付款'/>货到付款<input type='radio' name='buyType' value='网上支付'/>网上支付</li>
				<li><input type='hidden' value='".$rs['0']."' name='gid' /><input type='submit' value='立即购买'/></li>
				</ul>
			</div>";
		}
    ?>
	</form>
</div>
<?php include 'inc/footer.html'?>
</body>
</html>