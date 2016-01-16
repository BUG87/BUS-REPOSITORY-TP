<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUG科技有限公司</title>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/home/style/style.css" />
<script type="text/javascript" src="__PUBLIC__/home/js/jquery.pack.js"></script>
<script type="text/javascript" src="__PUBLIC__/home/js/jQuery.blockUI.js"></script>
<script type="text/javascript" src="__PUBLIC__/home/js/jquery.SuperSlide.js"></script>
</head>

<body>
﻿<div class="header">
    <h1 class="logo" title="">
				
        <a href="index.html"><img src="__PUBLIC__/home/images/logo.gif" alt="" /></a>
    </h1>
    <p class="top_r">
        <a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a>
    </p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul id = "nav">
				<!--BUG 地址格式： <?php echo U('组名/模型/方法');?> -->
        <li><a href="<?php echo U('Home/Bug/index');?>">首  页</a></li>
        <li><a href="<?php echo U('Home/Bug/about_us');?>">公司简介</a></li>
        <li><a href="<?php echo U('Home/Product/product');?>">产品展示</a></li>
        <li><a href="<?php echo U('Home/Knowledge/knowledge');?>">行业知识</a></li>
        <li><a href="<?php echo U('Home/Note/note');?>">客户留言</a></li>
        <li><a href="<?php echo U('Home/Contact/contact');?>" class="nobg">联系我们</a></li>
        <li></li>
     </ul>
     <div class="time" id="showTime">&nbsp;</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
        <div class="effect">
                <div id="slideBox" class="slideBox">
                    <div class="hd">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>

                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><img src="__PUBLIC__/home/images/lrgimg2.jpg" /></li>
                            <li><img src="__PUBLIC__/home/images/lrgimg5.jpg" /></li>
                            <li><img src="__PUBLIC__/home/images/lrgimg6.jpg" /></li>
                        </ul>
                    </div>
                </div>
        </div>  
</div>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
                <?php echo (strip_tags(str_cut($about["page_content"],0,100))); ?>
				<a href="<?php echo U('Home/Bug/about_us',array('page_id'=>$about['page_id']));?>" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="#" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
        	<li>
                <span class="listimg">
                    <img src="__PUBLIC__/home/images/tran.gif" class="blank" /><a href="#"><img src="__PUBLIC__/home/images/prod1.gif" alt="产品1" /></a>
                </span>
                <span class="listtxt">网格布</span>
            </li>
        	<li>
                <span class="listimg">
                    <img src="__PUBLIC__/home/images/tran.gif" class="blank" /><a href="#"><img src="__PUBLIC__/home/images/prod2.gif" alt="产品2" /></a>
                </span>
                <span class="listtxt">橡塑板</span>
            </li>
            <li>
                <span class="listimg">
                    <img src="__PUBLIC__/home/images/tran.gif" class="blank" /><a href="#"><img src="__PUBLIC__/home/images/prod3.jpg" alt="产品3" /></a>
                </span>
                <span class="listtxt">橡塑管</span>
            </li>
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
		<?php if(is_array($news)): foreach($news as $key=>$item): ?><li><a href="#"><?php echo ($item["art_title"]); ?></a><span class="time1"><?php echo (date("Y-m-d",$item["art_time"])); ?></span></li><?php endforeach; endif; ?>
		 </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业知识<b class="cGrey fn">Knowlege</b></h2><span class="more"><a href="#" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
		<?php if(is_array($knowledge)): foreach($knowledge as $key=>$item): ?><li><a href="#"><?php echo ($item["art_title"]); ?></a><span class="time1"><?php echo (date("Y-m-d",$item["art_time"])); ?></span></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="hackbox"></div>
    
	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links"><a href="#">卓越网上购物</a> | <a href="#">京东网上商城</a> | <a href="#">携程旅行网</a> | <a href="#">太平洋电脑网</a> | <a href="#">中国移动</a> | <a href="#">中国政府网</a> | <a href="#">凤 凰 网</a></p>
</div>
<includ file="Common/footer"/>

<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript">
    jQuery(".slideBox").slide( { mainCell:".bd ul",autoPlay:true} );
</script>
</body>
</html>