<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册页面</title>
</head>

<body>
<?php
include "../inc/head.php";
include '../inc/conn.php';
$name=$_POST['name'];
$pass=$_POST['pass'];
$xm=$_POST['xm'];
$tel=$_POST['tel'];
$dz=$_POST['dz'];
$cha=mysql_query("select * from userform where uName='$name'");
if($rs=mysql_num_rows($cha)>0){
	
		echo "用户名已存在，请重新更换用户名！！<a href='reg.html'>，返回注册页面</a>";
	

	}else{
	$sql="insert into userform(uName,uPass,uRealName,uTel,uAddr) values('".$name."','".$pass."','".$xm."','".$tel."','".$dz."')";
	if($result=mysql_query($sql)){		
		echo "注册成功！！<a href='login.php'>立即登陆！！</a><a href='../index.php'>，返回首页</a>";
	
	
	}
	
		}
?>
</body>
</html>