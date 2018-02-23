<?php
return array(
	//'配置项'=>'配置值'
	////数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址,部署时改成 localhost
	'DB_NAME'   => 'dblog', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'URL_MODEL' => 3,
	'PSW_SALT' => '$1$rasmusle$', // 用户密码加密盐值
);