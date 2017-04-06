<script language="javascript">
	//函数调用
	function calc(x, y){
		return x*y;
	}	
	document.write(calc(5,5));
	
	
	//条件语句
	var form = "";
	if(form==""){
		//alert("变量为空");
		document.write("<br>变量为空");
	}
	
	//被上面表单调用，检测润年
	function check(){
		var y = mform.year.value;
		if(y%4==0 && (y%100!=0 ||y%400==0)){
			alert(y+"是润年");
		}else{
			alert(y+"是平年");
		}
	}
	
	//添加二级菜单
	function lmenu(value){
		switch(value){
			case "新品":
				submenu.innerHTML="<a href='#'>商品展示</a>|<a href='#'>销售排行榜</a>|<a href='#'>商品查询</a>";
				break;
			case "购物":
				submenu.innerHTML="<a href='#'>添加商品</a>|<a href='#'>移除商品</a>|<a href='#'>清空购物车</a>";
				break;
			case "会员":
				submenu.innerHTML="<a href='#'>注册会员</a>|<a href='#'>修改会员</a>|<a href='#'>账户查询</a>";
				break;
		}
	}
</script>

<form name="mform">
	<select name="year">
		<option value="2000">2000年</option>
        <option value="1996">1996年</option>
        <option value="1900">1900年</option>
    </select>
    
    <input name="Submit" type="submit" onclick="check();" />
    
    
    <br /><br /><br />
    <table width="761" height="20">
		<tr>
        	<td width="67" align="center"><a href="test.php">首页</a></td>
            <td width="75" align="center"><a href="#" onmousemove="lmenu('新品')">新品上架</a></td>
            <td width="75" align="center"><a href="#" onmousemove="lmenu('购物')">购物车</a></td>
            <td width="74" align="center"><a href="#" onmousemove="lmenu('会员')">会员中心</a></td>
            <td width="61" align="center"><a href="test.php">在线帮助</a></td>
        </tr>
    </table>
    <br /><br />
    <div id="submenu"></div>
    
    <br /><br /><br />
</form>

