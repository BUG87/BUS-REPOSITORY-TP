<?php
return array(
	//'配置项'=>'配置值'
//DEBUG INFO	
	'SHOW_PAGE_TRACE' =>true,
//开启分组模式
	'APP_GROUP_MODE'=>1,
//应用程序的路径和目录
	'APP_GROUP_PATH'=>'Modules',//分组路径
	'APP_GROUP_LIST'=>'Home,Admin',//所有分组
	'DEFAULT_GROUP'=>'Home',	//默认分组
	'DEFAULT_MODULE'=>'Bug',//默认模块
	'DEFAULT_ACTION'=>'index',//默认方法
	//'URL_PATHINFO_DEPR'=>'-',//地址分隔符(只对模型-操作-参数有效)
	'TMPL_TEMPLATE_SUFFIX'=>'.html',//模板.格式
	'URL_MODEL'=>2,//1是pathinfo模式| 2是 rewrite模式 | 3是兼容模式 | 4是普通模式
//数据库配置
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'tp',
	'DB_USER'=>'root',
	'DB_PWD'=>'123457',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'tp_',
);
?>