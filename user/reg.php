<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册页面</title>
<style>
.kk{width:500px; height:300px; background:#CCC;  margin-left:430px; margin-top:50px;}
</style>
</head>

<body bgcolor="#999999" >
<?php
include "../inc/head2.php";
?>
<div class="kk" >
<form action="reg_pass.php" method="post">
<table align="center" width="400">
<caption style="color:#900;"><h2>欢迎注册为本站新用户</h2></caption>
<tr>
<th>用户名：</th><td><input name="name" type="text" /></td>
</tr>
<tr>
<th>用户密码：</th><td><input name="pass" type="password" /></td>
</tr>
<tr>
<th>真实姓名：</th><td><input name="xm" type="text" /></td>
</th>
<tr>
<th>电话号码：</th><td><input name="tel" type="text" /></td>
</tr>
<tr>
<th>送货地址：</th><td><textarea name="dz" rows="5"></textarea></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" value="提交" /></td></tr>
</table>

</form>
</div>

</body>
</html>
