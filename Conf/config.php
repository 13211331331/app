<?php
return array(
	//'配置项'=>'配置值'
//Database
'DB_TYPE'   		=> 	'mysql', 	// 数据库类型
'DB_HOST'   		=> 	'localhost',// 服务器地址
'DB_NAME'   		=> 	'commlib', 	// 数据库名
'DB_USER'   		=> 	'root', 	// 用户名
'DB_PWD'    		=> 	'hanlin', 	// 密码
'DB_PORT'   		=> 	3306, 		// 端口
'DB_PREFIX' 		=> 	'', 		// 数据库表前缀
'DB_DEPLOY_TYPE'	=>	0,			// 数据库部署方式 0 集中式 1 分布式	0
'DB_RW_SEPARATE'	=>	FALSE,		// 数据库是否需要读写分离 分布式部署下有效
'DB_MASTER_NUM'		=>	1,			// 设置读写分离后 主服务器数量	1
'URL_CASE_INSENSITIVE'  => true, //不区分大小写 问题解决

);
?>