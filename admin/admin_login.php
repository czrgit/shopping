<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	include '../inc/conn.php';
	include '../inc/global.php';
	$uName=$_POST['uName'];
	$uPass=$_POST['uPass'];
	$sql="select * from admin where auser='".$uName."'";
	$result=mysql_query($sql);
	if($rs=mysql_fetch_array($result)){
		if($rs['apass']==$uPass){
			echo "<h1>登陆成功！！！请稍等！！！</h1>";
			$_SESSION['uadmin']=$uName;
			header("refresh:2;url=index.php");
		
			}else{
			echo "<h1>密码错误！！！</h1>";
			header("refresh:1;url=admin_login.html");	
				}
		
		}else{
			echo "<h1>用户名不存在！！！登陆失败！！！</h1>";
			header("refresh:1;url=allGoods.php");	
			
			}
?>
</body>
</html>
