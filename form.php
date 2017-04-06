<form enctype="multipart/form-data" method="post" action="phpServer.php" target="_blank">
    <table width="410" bgcolor="#999999" border="1">
    	<tr>
        	<td width="103" height="25" align="right">姓名：</td>
            <td height="25">
            	<input name="user" type="text" id="user" size="20" maxlength="20"/>
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">性别：</td>
            <td height="25">
            	<input name="sex" type="radio" value="男" checked="checked"/>男
                <input name="sex" type="radio" value="女"/>女
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">密码：</td>
            <td height="25">
            	<input name="pwd" type="password" id="pwd" size="20" maxlength="20"/>
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">学历：</td>
            <td height="25">
            	<select name="edu">
                	<option >本科</option>
                    <option >大专</option>
                    <option >高中</option>
                    <option selected>初中</option>
                </select>
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">爱好：</td>
            <td height="25">
            	<input name="like[]" type="checkbox" value="电脑" />电脑
                <input name="like[]" type="checkbox" value="音乐" />音乐
                <input name="like[]" type="checkbox" value="旅游" />旅游
                <input name="like[]" type="checkbox" value="其它" />其它
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">个人写真：</td>
            <td height="25">
            	<input name="photo_text" type="text" id="photo" size="20" maxlength="20"/>
                <input name="photo" type="file" value="浏览.."/>
            </td>
        </tr>
        
        <tr>
        	<td width="103" height="25" align="right">个人简介：</td>
            <td>
            	<textarea name="summary" cols="30" rows="6"></textarea>
            </td>
        </tr>
        
        <tr align="center">
            <td colspan="3">
            	<input name="submit" type="submit" value="上传"/>
                <input type="reset"/>
            </td>
        </tr>
    </table>
</form>