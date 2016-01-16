<?php
include("../include/init.php");

//查询出所有的顶级导航
$sql = "SELECT * FROM {$wd_}nav WHERE parent_id = 0";
$nav_list = get_all($sql);

if($_POST){

	$data = array(
	 "nav_name"=>$_POST['nav_name'],
	 "nav_order"=>$_POST['nav_order'],
	 "nav_url"=>$_POST['nav_url'],
	 "nav_show"=>$_POST['nav_show'],
	 "parent_id"=>$_POST['parent_id'],
	);
	
	$insert_id = insert("{$wd_}nav",$data);   //插入数据
	
	if($insert_id){
		show_msg("添加导航成功","nav_list.php");
		exit;
	}else{
		show_msg("添加导航失败","nav_add.php");
		exit;
	}


}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加导航</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div class="container">
    <h3 class="marginbot">添加导航<a href="nav_list.php" class="sgbtn">返回导航列表</a></h3>
    <form action="#" method="post">
	<div class="mainbox">
            <table class="opt" style="width:600px;">
                <tbody>
                    <tr>
                        <th>导航名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="nav_name" class="txt" style="width:400px;" type="text">
                        </td>
                    </tr>
					<tr>
                        <th>导航排序：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="nav_order" class="txt" style="width:400px;" type="text">
                        </td>
                    </tr>
					<tr>
                        <th>导航地址：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="nav_url" class="txt" style="width:400px;" type="text">
                        </td>
                    </tr>
					<tr>
                        <th>是否显示：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="nav_show" value="1" type="radio">显示
                        <input name="nav_show" value="0" type="radio">隐藏
                        </td>
                    </tr>
					<tr>
                        <th>导航属性：</th>
                    </tr>
					<tr>
						<td>
							<select name="parent_id" id="">
								<option value="">请选择</option>
								<option value="0">顶级导航</option>
								<?php foreach($nav_list as $item){?>
								   <option value="<?php echo $item['nav_id'];?>"><?php echo $item['nav_name'];?></option>
								<?php }?>
							</select>
						</td>
					</tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
    </div>
	</form>
</div>
</body>
</html>