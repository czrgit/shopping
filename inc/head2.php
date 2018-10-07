<?php
	include "../inc/conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
	.header{ width:1090px; margin:0 auto; height:80px; margin-top:20px;}
	.logo{ width:300px; float:left; font-size:3.0em; font-weight: bold; font-family:"微软雅黑"; color:#369;}
	.nav{ width:700px; float:left; margin-top:20px;}
	.nav a{display:block; padding:6px 10px; background:#F1FCF5; border:#3C9 solid 1px; color:#393; text-decoration:none; text-align:center; font-size:1.2em; border-radius:10px; float:left; margin-right:10px;}
	.nav a:hover{ border:#CC6 solid 1px; background:#F9F4EC; color:#C60;}

</style>
</head>

<body>
<div class="header">
	<div class="logo">创新电脑网</div>
	<div class="nav">
    	<a href="../index.php">首页</a>
        <?php
			$sql="select * from userform";
			$result=mysql_query($sql);
			@$rs=mysql_fetch_array($result);
			session_start();
			if(isset($_SESSION['user'])){
				echo "<a href='showOrder.php'>查看订单</a>";
				echo "<a href='user.php?uid=".$_SESSION['uid']."'>用户信息</a>";
				echo "<a href='#'>".$_SESSION['user'].",欢迎您！</a>";
				echo "<a href='loginout.php'>退出</a>";
				
				
				}else{
					echo "<a href='reg.php'>注册</a>";
					echo "<a href='login.php'>登陆</a>";
					
					}
		
		
		?>
        
    </div>
</div>
</body>
</html>