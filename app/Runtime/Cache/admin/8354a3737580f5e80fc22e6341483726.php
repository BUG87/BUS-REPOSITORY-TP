<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>BUG后台管理系统</title>
</head>
<frameset frameborder="1" border="1" noresize rows="9%,91%">
	<frame src="<?php echo U('Admin/Top/index');?>" scrolling="no" />
	<frameset frameborder="0" cols="15%,85%">
		<frame src="<?php echo U('Admin/Menu/index');?>" scrolling="no" />
		<frame name="main" src="<?php echo U('Admin/Index/sys_info');?>" />
	</frameset>
</frameset>
</html>