
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登陆</title>
</head>

<style>
.body{ margin:0;}
.d1{
	font-family:"楷体";
	background:#CCC;
	margin-top: 100px;
	margin-left:500px;
	font-weight: bold;
	width:400px;
	height:200px;
}

</style>
</head>
<?php
include "../inc/head2.php";
?>
<body class="body" bgcolor="#999999">

	<div class="d1">
	<form method="post" action="login_pass.php" >
    <table><tr><td height="30"></td></tr></table>
    <table align="center"  cellspacing="5" >
    	<caption>用户登陆界面</caption>
    <tr>
    	<th>用 户 名：</th>
    	<td><input name="uName" type="text"  />	</td>
    </tr>
    <tr>
    	<th>用户密码：</th>
        <td><input  name="uPass" type="password"  /></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="登陆" /></td>
    </tr>
    </table>
    </form>
    </div>
</body>
</html>
