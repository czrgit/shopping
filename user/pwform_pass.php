<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
</head>

<body>
<?php
	include "../inc/conn.php";
	include"../inc/head2.php";
?>
<?php
$ypass=$_POST['ypass'];//$ypass是原密码
$npass=$_POST['npass'];//$npass是新密码
$qpass=$_POST['qpass'];//$qpass是确认密码
$cha=mysql_query("select * from userform where uPass='$ypass'");
$sql="update userform set uPass='".$npass."' where uid='".$_GET['uid']."'";
if(mysql_fetch_array($cha)){
	if($npass==$qpass){
	
			if(mysql_query($sql)){			
			echo "<h2>修改成功</h2>";
			header("refresh:1;url=../index.php");}
			
		}else{
			echo "<h2>密码不一致，请重新输入！！</h2>";
			header("refresh:1;url=pwform.php");
			}
	
	}else{
		echo "<h2>原密码有误,请重新输入！！</h2>";
			header("refresh:1;url=pwform.php");
		}		
		
?>
</body>
</html>