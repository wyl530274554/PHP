<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<?php
	//数据库连接
	$link = mysql_connect("sqld.duapp.com:4050","76a91a93ec6c4431a14e9b213f29c010","16a5274388284f9d8510664937a03dea") or die("不能连接DB".mysql_error());	
	if($link){
		echo "数据库连接成功<br>";
	}
	
	//数据库选择
	$dbSelected = mysql_select_db("DqxHZTpawGAuZARIsAVc",$link);
	if($dbSelected){
		echo "数据库选择成功<br>";
	}
	
	//查询
	$querySql = "SELECT * FROM mytest";
	$queryResult = mysql_query($querySql,$link);
	$num = mysql_num_rows($queryResult);
	echo '共'.$num.'条记录<br>';
	
	//循环输出每条记录
?>
	<table style="background-color:#FFFFFF" border="1">
    <tr align="left">		
		<td  align="center" width="80" height="20" >ID</td>
		<td  align="center" width="80">姓名</td>
		<td  align="center" width="80">年龄</td>
		<td  align="center" width="80">地址</td>
		<td  align="center" width="80">学院</td>
        <td  align="center" width="80">性别</td>
	</tr>   
<?php	
	while($info = mysql_fetch_object($queryResult)){
?>	
	<tr align="left">
		<td height="20" width="80" align="center"><?php echo $info->id; ?></td>
		<td  align="center" width="80"><?php echo $info->name; ?></td>
		<td  align="center" width="80"><?php echo $info->age; ?></td>
		<td  align="center" width="80"><?php echo $info->address; ?></td>
		<td  align="center" width="80"><?php echo $info->school; ?></td>
		<td  align="center" width="80"><?php echo $info->sex; ?></td>
	</tr>    
    <br />

<?php
	}	
?>
	</table>

