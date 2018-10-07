<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户信息</title>
<style type="text/css">
 .kk{width:500px; height:300px; margin-left:475px; margin-top:50px;}
 
.kk table caption  {
	font-size: 26px;
	line-height: 26px;
	margin-bottom:10px;
}
</style>
</head>

<body >
<?php
include"../inc/head2.php";
include "../inc/conn.php";
@$sql="select * from userform where uid='".$_GET['uid']."'";
$result=mysql_query($sql);
@$rs=mysql_fetch_array($result);
?>
<div class="kk">
<table border="2" bordercolor="#009900" bgcolor="#E8FBE1"  cellspacing="5" cellpadding="5" >
<caption><b>用户信息</b></caption>
<tr>
<td width="20%" height="20">用户名：</td><td><?=$rs['uName']?></td>
</tr>
<tr>
<td>真实姓名：</td><td><?=$rs['uRealName']?></td>
</tr>
<tr>
<td>电话号码：</td><td><?=$rs['uTel']?></td>
</tr>
<tr>
<td>送货地址：</td><td><?=$rs['uAddr']?></td>
</tr>
<tr>
<td><a href='pwform.php?uid=<?=$rs["uid"]?>'>修改密码</a></td><td><a href="user_modify.php?uid=<?=$rs['uid']?>" >更改信息</a></td>
</tr>
</table>
</div>
<?php
include "../inc/footer.html";
?>
</body>
</html>