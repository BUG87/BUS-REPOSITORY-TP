<?php
include("../include/init.php");   //包含配置文件

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$sql = "SELECT COUNT(*) AS c FROM {$wd_}nav";
$count = get_one($sql);
$limit = 8;
$size = 5;

$start = ($page-1)*$limit;

$sql = "SELECT * FROM {$wd_}nav ORDER BY nav_order ASC LIMIT $start,$limit";
$nav_list = get_all($sql);



$page_str = page($page,$count['c'],$limit,$size,$class='sabrosus');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航管理</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/css.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div class="container">
    <h3 class="marginbot">导航列表<a href="nav_add.php" class="sgbtn">添加导航</a></h3>
    <div class="mainbox">
        <form action="" method="post">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                        <th nowrap="nowrap">导航名称</th>
                        <th nowrap="nowrap">导航地址</th>
                        <th nowrap="nowrap">显示</th>
                        <th nowrap="nowrap">操作</th>
                    </tr>
					<?php foreach($nav_list as $item){?>
                    <tr>
                        <td width="80"><input name="" value="" class="checkbox" type="checkbox"></td>
                        <td><strong><?php echo $item['nav_name'];?></strong></td>
                        <td width="100"><?php echo $item['nav_url'];?></td>
                        <td width="150"><?php echo $item['nav_show'] ? "是":"否";?></td>
                        <td width="100">
							<a href="">编辑</a>
							<a href="">删除</a>
						</td>
                    </tr>
					<?php }?>
                  
                    <tr class="nobg">
                    	<td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="4">
                            <?php echo $page_str;?>
                      	</td>
                    </tr>                
                </tbody>
        	</table>
        <div class="margintop"></div>
        </form>
    </div>
</div>
</body>
</html>