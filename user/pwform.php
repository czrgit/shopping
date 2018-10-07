<?php
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户密码</title>
<style>
.kk{width:500px; height:200px; background:#CCC;  margin-left:430px; margin-top:80px; }
</style>
</head>

<body bgcolor="#999999" >
<?php
include "../inc/conn.php";
include"../inc/head2.php";
@$sql="select * from userform where uid='".$_GET['uid']."'";
$result=mysql_query($sql);
@$rs=mysql_fetch_array($result);
?>

<div class="kk" >
<form method="post" action="pwform_pass.php?uid=<?=$rs['uid']?>">
<table align="center" width="300" border="0">
<caption style="color:#900;"><h2>修改密码</h2></caption>
<tr>
<th align="right">原密码：</th><td><input name="ypass" type="password" /></td>
</tr>
<tr>
<th align="right">新密码：</th><td><input  name="npass" type="password" /></td>
</tr>
<tr>
<th align="right">确认密码：</th><td><input  name="qpass" type="password" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="修改" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>