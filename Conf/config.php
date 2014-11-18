<?php
return array(
	//'配置项'=>'配置值'
	'APP_NAME'		=>	'app',
//Database
'DB_TYPE'   		=> 	'mysql', 	// 数据库类型
'DB_HOST'   		=> 	'localhost',// 服务器地址
'DB_NAME'   		=> 	'xinjie', 	// 数据库名
'DB_USER'   		=> 	'root', 	// 用户名
'DB_PWD'    		=> 	'mysql', 	// 密码
'DB_PORT'   		=> 	3306, 		// 端口
'DB_PREFIX' 		=> 	'', 		// 数据库表前缀
'DB_DEPLOY_TYPE'	=>	0,			// 数据库部署方式 0 集中式 1 分布式	0
'DB_RW_SEPARATE'	=>	FALSE,		// 数据库是否需要读写分离 分布式部署下有效
'DB_MASTER_NUM'		=>	1,			// 设置读写分离后 主服务器数量	1
'URL_CASE_INSENSITIVE'  => true, //不区分大小写 问题解决
'TMPL_PARSE_STRING'  => array(
     '__PUBLIC__'=>__ROOT__.'/app/Public',
 ),
 'SESSION_OPTIONS'=> array(
			'expire'=>'30'
 ),

  'LAYOUT_ON' 		=> 	TRUE,		//

    //Group
    'APP_GROUP_LIST' 	=> 	'Admin,Comm',	// 项目分组设定
    'DEFAULT_GROUP'  	=> 	'Comm',	// 默认分组
    'DEFAULT_THEME' 	=> 	'',

    'EMPTY_MODULE'		=>	'Department,Role,Broadband,Broadband_cat,Passport,Parameters,Log,',	//允许通过EmptyAction处理的模块，注意以,结尾
    'EMPTY_ACTION'		=>	'index,add,edit,save,delete,refer,view,operate,',//允许通过EmptyAction处理的Action，注意以,结尾

    'LazyInc'			=>	'6',

    'LOAD_EXT_CONFIG'=>'columns,query,pill',

    'TMPL_SIRIP_SPACE'=>false,

);
?>