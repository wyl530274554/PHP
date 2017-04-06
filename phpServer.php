<?php
	print_r($_REQUEST);
	echo '<br><br>';
	var_dump($_FILES['photo']);
	echo '<br><br>';
		
	if($_POST['submit']=='登录'){
		echo '是登录';
	}else if($_POST['submit']=='提交'){
		echo '是提交';
	}else if($_POST['submit']=='上传'){
		echo '是上传<br>';
		echo '您的姓名是：'.$_POST['user'].'，密码是：'.$_POST['pwd'].'<br>';
	}else{
		echo '点的是啥？<br>';
	}
	
	$result = "";
	
	if($_POST['like'] != null){	
		foreach( $_POST['like'] as $li)
		{
			echo '<br>';
			$result .= $li."  ";
		}	
	}
	echo $result.'<br><br>';
	
	echo "photo: ".$_POST['photo'].'<br><br>';
	
	//保存上传的文件
	$path = './upfiles/'.$_FILES['photo']['name'];
	$ret = move_uploaded_file($_FILES['photo']['tmp_name'], $path);
	echo '个人写真： '.$path.'<br>上传结果：'.$ret;
?>