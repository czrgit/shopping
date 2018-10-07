<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创新电脑网</title>
<style type="text/css">
	.main{width:1090px; margin:0 auto; margin-bottom:30px;}
	ul.shop li{width:250px; height:210px; float:left; margin:20px; list-style:none;}
	ul.shop li a{
		display:block;
	 	width:250px;
	  	height:200px; 
	  	border:#DDF1D8 solid 3px;
	  	overflow:hidden; 
	   	text-align:center; 
	   	padding:10px; 
	   	color:#396; 
	   	font-weight:bold;
	    text-decoration:none;
		}
	ul.shop img{width:220px; height:160px; border-width:0;}
	
	ul.shop li a:hover{border-color:#F63; color:#F30; background:#FEEEF7; text-decoration:underline;}
</style>
</head>

<body>
<?php
include "inc/head.php"

?>
<div class="main">
	<ul class="shop">
<?php
include "inc/conn.php";
$sql="select * from goods";
$result=mysql_query($sql);
while($rs=mysql_fetch_array($result)){
	echo "<li><a href='shopShow.php?gid=".$rs['gid']."'><img src='pics/".$rs['gpic']."'/><p>".$rs['gname']."</p></a></li>";
	
	}
?>
	</ul>
</div>
<?php include "inc/footer.html" 

?>
</body>
</html>