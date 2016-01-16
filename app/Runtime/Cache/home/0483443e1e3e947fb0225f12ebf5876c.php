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
</div><!-- 头部 -->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
<?php if(is_array($pro_list)): foreach($pro_list as $key=>$item): ?><li>
                <span class="listimg">
                    <img src="__PUBLIC__/home/images/tran.gif" class="blank" /><a href="<?php echo U('Home/Product/product_detail');?>"><img src="__PUBLIC__/home/images/prod1.gif" alt="产品1" /></a>
                </span>
                <span class="listtxt"><?php echo (str_cut($item["pro_name"],0,10,'utf-8','')); ?></span>
            </li><?php endforeach; endif; ?>
	
        </ul>
        <div class="blank10"></div>
        <!--<div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>-->
							<div class="pages">
								<?php echo ($page_str); ?>
							</div>
									<div class="blank6"></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<a href="#" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
    	<div class="rightBox">
        	<h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
            	<li><a href="#">祝贺公司网站正式上线</a></li>
                <li><a href="#">禁止保温材料现场调配 保证...</a></li>
                <li><a href="#">节能65%烧结页岩空心砖面世</a></li>
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
        	<h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
            	<li><a href="#">卓越网上购物</a></li>
                <li><a href="#">京东网上商城</a></li>
                <li><a href="#">携程旅行网</a></li>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>
    
    
</div>
﻿<div class="footer">
	<p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567<img src="__PUBLIC__/home/images/qq.jpg" alt="" /></p>
	<p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
	<p><a href="#">粤ICP备08108790号</a></p>
</div>
<script type="text/javascript" src="__PUBLIC__/home/js/js.js"></script>
<script type="text/javascript">
    jQuery(".slideBox").slide( { mainCell:".bd ul",autoPlay:true} );
</script>
</body>
</html>