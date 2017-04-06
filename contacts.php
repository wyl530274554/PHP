<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<?php
	if(isMobile())
	{//手机
		//echo("是手机");exit;
	}else{
	//电脑
		//echo("暂时无内容");exit;
	}

	//数据库连接
	$link = mysql_connect("sqld.duapp.com:4050","76a91a93ec6c4431a14e9b213f29c010","16a5274388284f9d8510664937a03dea") or die("不能连接DB".mysql_error());
	//$link = mysql_connect("127.0.0.1","root","root1234") or die("不能连接DB".mysql_error());		
	if($link){
		//echo "数据库连接成功<br>";
	}
	
	//数据库选择
	$dbSelected = mysql_select_db("DqxHZTpawGAuZARIsAVc",$link);
	//$dbSelected = mysql_select_db("melon",$link);
	if($dbSelected){
		//echo "数据库选择成功<br>";
	}
	
	//查询
	$querySql = "SELECT * FROM contacts";
	$queryResult = mysql_query($querySql,$link);
	$num = mysql_num_rows($queryResult);
	echo '联系人信息，共'.$num.'条记录';
	date_default_timezone_set('prc');
	
	//循环输出每条记录
?>
	<table style="background-color:#FFFFFF" border="1">
    <tr align="left">
		<td  align="center">姓名</td>
        <td  align="center">手机</td>
		<td  align="center">年龄</td>
		<td  align="center">地址</td>
        <td  align="center">性别</td>
	</tr>   
<?php	
	while($info = mysql_fetch_object($queryResult)){
	$mobile = $info->mobile;
	$year = $info->year_of_birth;
?>	
	<tr align="left">
		<td  align="center" width="80" height="40"><?php echo $info->name; ?></td>
        <td  align="center" width="80"><a href=<?php echo "\"tel:".$mobile."\"" ?>><?php echo $mobile?></a></td>
		<td  align="center" width="80"><?php echo empty($year)? 0 : date("Y")-$year+1 ?></td>
		<td  align="center" width="80"><?php echo $info->address; ?></td>
		<td  align="center" width="80"><?php echo $info->sex; ?></td>
	</tr>    
    <br />

<?php
	}	
?>
	</table>
    
<?php
/**
 * 是否移动端访问访问 *
 * @return bool
 */
function isMobile()
{ 
	// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
	if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
	{
		return true;
	} 
	// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
	if (isset ($_SERVER['HTTP_VIA']))
	{ 
		// 找不到为flase,否则为true
		return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
	} 
	// 脑残法，判断手机发送的客户端标志,兼容性有待提高
	if (isset ($_SERVER['HTTP_USER_AGENT']))
	{
		$clientkeywords = array ('nokia',
			'sony',
			'ericsson',
			'mot',
			'samsung',
			'htc',
			'sgh',
			'lg',
			'sharp',
			'sie-',
			'philips',
			'panasonic',
			'alcatel',
			'lenovo',
			'iphone',
			'ipod',
			'blackberry',
			'meizu',
			'android',
			'netfront',
			'symbian',
			'ucweb',
			'windowsce',
			'palm',
			'operamini',
			'operamobi',
			'openwave',
			'nexusone',
			'cldc',
			'midp',
			'wap',
			'mobile'
			); 
		// 从HTTP_USER_AGENT中查找手机浏览器的关键字
		if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
		{
			return true;
		} 
	} 
	// 协议法，因为有可能不准确，放到最后判断
	if (isset ($_SERVER['HTTP_ACCEPT']))
	{ 
		// 如果只支持wml并且不支持html那一定是移动设备
		// 如果支持wml和html但是wml在html之前则是移动设备
		if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
		{
			return true;
		} 
	} 
	return false;
}
?>
