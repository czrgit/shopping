<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.bb {
	font-weight: bold;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
}
</style>
</head>

<body>
<?php include"../inc/global.php"; ?>
<table width="95%"  cellspacing="5" cellpadding="5" >
<tr style="height:20%;">
<td ><h1>欢迎使用企业后台管理系统</h1></td>

</tr>
<tr>
<td width="46%" height="20px">用户名：<span style="color:#F30; font-weight:600;"><?=$_SESSION['uadmin']?></span></td>
<td width="64%">ip：<?=$_SERVER['REMOTE_ADDR']?></td>
</tr>
<tr>
<td height="20px">身份过期：<?=ini_get('session.gc_maxlifetime')?></td>
<td height="20px">现在时间：<?php date_default_timezone_set('prc');
			echo date("y-m-d h:i:s");
?></td>
</tr>
<tr>
<td>服务器域名：<?=$_SERVER['HTTP_HOST']?></td>
<td>脚本解释引擎：<?=$_SERVER['SERVER_SOFTWARE']?></td>
</tr>
<tr>
<td>获取php运行方式：<?=php_sapi_name()?></td>
<td>浏览器版本：<?=$_SERVER['HTTP_USER_AGENT']?></td>
</tr>
<tr>
<td>服务器端口：<?=$_SERVER['SERVER_PORT']?></td>
<td>系统类型及版本号：<?=php_uname()?></td>
</tr>
</table>
</body>
</html>