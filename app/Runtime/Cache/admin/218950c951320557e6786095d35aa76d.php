<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUG后台管理系统首页</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body>
<div class="container">
	<h3>统计信息</h3>
	<ul class="memlist fixwidth">
		<li><em><a href="products.html">产品总数</a>:</em><?php echo ($data["product_count"]); ?></li>
		<li><em><a href="knowledge.html">留言总数</a>:</em><?php echo ($data["note_count"]); ?></li>
		<li><em><a href="guestbook.html">文章总数</a>:</em><?php echo ($data["article_count"]); ?></li>
	</ul>
	
	<h3>系统信息</h3>
	<ul class="memlist fixwidth">
    	<li><em>Host name :</em>&nbsp;<?php echo $_SERVER['SERVER_NAME']; ?> ( port:<?php echo $_SERVER['SERVER_PORT'];?>)</li> 
		<li><em>OS :</em>&nbsp;&nbsp;<?php echo PHP_OS; ?></li>
		<li><em>Server Software :</em>&nbsp;&nbsp;<?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
		<li><em>Database Platform :</em>&nbsp;&nbsp;<?php echo mysql_get_server_info(); ?></li>	
	</ul>
	<h3>Copyright</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>All right reserved : </em>
			<em class="memcont"><a href="<?php echo U('Home/Bug/index');?>" target="_blank">BUG HOME</a></em>
		</li>
		<li>
			<em>Program Version : </em>
			<em class="memcont">BUG 1.0 Release</em>
		</li>
		<li>
			<em>Technolegy Support : </em>
			<em class="memcont">BUG@163.com</em>
		</li>
	</ul>
</div>
</body>
</html>