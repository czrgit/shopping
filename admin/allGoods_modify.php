<?php
	include "../inc/conn.php";
	include"../inc/global.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改商品</title>
</head>

<body>
<?php
$sql="select * from goods where gid='".$_GET['gid']."'";
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
?>

    <form method="post" action="allGoods_modify_pass.php?gid=<?=$rs['gid']?>" enctype="multipart/form-data">
    <table>
    	<caption >修改商品信息</caption>
    	<tr>
        	<th>商品名称：</th>
            <td><input type="text" name="gname" id="gname" value="<?php echo $rs['gname']?>" /></td>
        </tr>
        <tr>
        	<th>商品图片：</th>
            <td><input type="file" name="gpic" value="<?=$rs['gpic']?>"  /></td>
        </tr>
        <tr>
        	<th>商品单价：</th>
            <td><input type="text" name="gprice" value="<?php echo $rs['gprice']?>"/></td>
        </tr>
        <tr>
        	<th>商品库存：</th>
            <td><input type="text" name="gnum" value="<?php echo $rs['gnum']?>" /></td>
        </tr>
        <tr>
        	<th>商品简介：</th>
            <td><textarea name="ginfo" rows="10" cols="30" ><?php echo $rs['ginfo']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" value="修改" /></td>
        </tr>
    </table>
    </form>
</body>
</html>