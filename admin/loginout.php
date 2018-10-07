<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
include"../inc/global.php";
session_unset();
session_destroy();
echo "<h1>退出成功！</h1>";
header("refresh:1;url=admin_login.html");
?>
</body>
</html>