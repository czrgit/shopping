<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<style type="text/css">
body{ margin:0;}
.top{width:100%; background:#999; height:90px; line-height:80px; padding-left:60px; border-bottom:#39F solid 4px;}


.left{ width:180px; float:left; background:#CCC; height:450px; border-right:#39F solid 4px; padding:20px;}

.left li a{height:50px; line-height:50px; color:#060; font-size:1.6em; text-decoration:none; border-bottom:dashed 2px #F30; padding-bottom:6px;}

.left li a:hover{color:#F30; border-bottom:solid 2px #F30; background:#FF9;}

.main{width:1000px;  padding:20px; float:left;}

.bottom{width:100%; clear:both; background:#999; height:120px; line-height:120px; text-align:center; border-top:#39F solid 4px;}
</style>
</head>

<body>
<?php
	include "../inc/conn.php";
	include"../inc/global.php";
	if(isset($_SESSION['uadmin'])){

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background:#999;   border-bottom:#39F solid 4px;">
<tr>
<td width="46%"><h1 style="padding-left:60px; margin-top:20px;">网站后台管理</h1></td>

<td width="64%" valign="bottom"  align="right" style="color:#FFF; font-size:14px;">当前时间：<span id="time">
<script>
document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+'日一二三四五六'.charAt(new Date().getDay());
setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
</script></span>
</td>
</tr>
<tr style="height:16px; background:#CCC;">
<td width="36%" style="color:#000000; font-size:16px;">欢迎您:<span style="color:#F30; font-weight:600;"><?php echo $_SESSION['uadmin']?></span>,您现在登录的是企业网站管理系统</td>

<td width="64%" align="right" style="color:#000000;"><input type="button" value="退出" onclick="window.parent.location.href='loginout.php'" style="margin-top:-3px; height:21px; margin-right:5px;" /></td>
</tr>
</table>

<div class="left">
	<ul>
    	<li><a href="../index.php" target="_blank">前台首页</a></li>
    	<li><a href="addGoods.html" target="right">添加商品</a></li>
        <li><a href="allGoods.php" target="right">商品管理</a></li>
        <li><a href="showOrder.php" target="right">订单管理</a></li>
        <li><a href="loginout.php" target="_parent">退出系统</a></li>
    </ul>
</div>

<div class="main">
	<iframe name="right"  src="right.php" frameborder="0" width="100%" height="450"></iframe>
</div>

<div class="bottom"><h2>版权所有：计应1班 22陈志荣</h2></div>
<?php
}else{
	echo "<h1>您还没有登陆，请先登陆！！</h1>";
	header("refresh:1;url=admin_login.html");
	}
?>
</body>
</html>