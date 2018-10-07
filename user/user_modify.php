<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改用户信息</title>
<style>
.kk{width:500px; height:300px; background:#CCC; margin-left:430px; margin-top:100px;}
</style>
</head>

<body bgcolor="#999999">
<?php
include "../inc/head2.php";
include '../inc/conn.php';
@$sql="select * from userform where uid='".$_GET['uid']."'";
$result=mysql_query($sql);
@$rs=mysql_fetch_array($result);
?>
<div class="kk" >
<form action="user_modify_pass.php?uid=<?=$rs['uid']?>" method="post">
<table align="center" width="400" cellpadding="2" >
<caption style="color:#900;"><h2>更改用户信息</h2></caption>
<tr>
<th>用户名：</th><td><input name="name" type="text" value="<?=$rs['uName']?>"/></td>
</tr>
<tr>
<th>真实姓名：</th><td><input name="xm" type="text"  value="<?=$rs['uRealName']?>"/></td>
</th>
<tr>
<th>电话号码：</th><td><input name="tel" type="text" value="<?=$rs['uTel']?>"/></td>
</tr>
<tr>
<th>送货地址：</th><td><textarea name="dz" rows="5"><?=$rs['uAddr']?></textarea></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" value="修改" /></td></tr>
</table>

</form>
</div>
</body>
</html>