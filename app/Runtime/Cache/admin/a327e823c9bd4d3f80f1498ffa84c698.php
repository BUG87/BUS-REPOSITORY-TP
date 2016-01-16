<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品管理</title>
<link rel="stylesheet" href="__PUBLIC__/admin/styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="__PUBLIC__/admin/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body>
<div class="container">
    <h3 class="marginbot">产品管理<a href="product_edit.html" class="sgbtn">添加新产品</a></h3>
    <div class="mainbox">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                        <th nowrap="nowrap">产品名称</th>
                        <th nowrap="nowrap">所属分类</th>
                        <th nowrap="nowrap">添加时间</th>
                        <th nowrap="nowrap">操作</th>
                    </tr>
					<?php if(is_array($product_list)): foreach($product_list as $key=>$item): ?><tr>
                        <td width="80"><input class="checkbox" type="checkbox"></td>
                        <td><strong><?php echo ($item["pro_name"]); ?></strong></td>
                        <td width="100"><?php echo ($item["procate_name"]); ?></td>
                        <td width="150"><?php echo (date("Y-m-d",$item["pro_time"])); ?></td>
                        <td width="100"><a href="product_edit.html">编辑</a></td>
                    </tr><?php endforeach; endif; ?>
                    <tr class="nobg">
                    	<td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="4">
                            <div class="pages">
                            <em>100</em>
                           <?php echo ($page_show); ?> </div>
                      	</td>
                    </tr>                
                </tbody>
        	</table>
        <div class="margintop"></div>
    </div>
</div>