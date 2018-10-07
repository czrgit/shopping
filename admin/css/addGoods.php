<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	include '../inc/conn.php';
	$goodsName = $_POST['goodsName'];
	$goodsFileName = time()."_".$_FILES['goodsFile']['name'];
	$goodsPrice=$_POST['goodsPrice'];
	$goodsNum=$_POST['goodsNum'];
	$goodsInfo=$_POST['goodsInfo'];
	$fileResult=move_uploaded_file($_FILES['goodsFile']['tmp_name'],"../pics/".$goodsFileName);
	if($fileResult){
		echo "<h1>图片上传至pics文件夹中！！</h1>";
		}
	$rs=mysql_query("insert into goods(gname,gpic,gprice,gnum,ginfo) values('".$goodsName."','".$goodsFileName."','".$goodsPrice."','".$goodsNum."','".$goodsInfo."')");
	if($rs){
		echo "<h1>商品信息已成功添加进入数据库！</h1>";
		header("refresh:1;url=allGoods.php");
		}
?>
</body>
</html>