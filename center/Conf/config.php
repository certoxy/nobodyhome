<?php
return array(
	//服务器名
	'SERVER_NAME'			=> 'http://www.center.com',

	//模板
	'TMPL_TEMPLATE_SUFFIX'  => '.tpl',		//模板后缀.tpl  
	'TMPL_ENGINE_TYPE' 		=> 'PHP',		//模板语言，原生php
	
	//URL设置
	'URL_CASE_INSENSITIVE'  => TRUE,		//URL路径大小写敏感
	'URL_MODEL'             => 2,			//URL采用:REWRITE 模式
	'URL_HTML_SUFFIX'       => '',			//URL后缀
	'DEFAULT_MODULE'        => 'Index', 		//默认模块
    'DEFAULT_ACTION'        => 'index', 	// 默认操作
	'AUTH_ERROR'			=> '',//用户验证失败跳转
	
	//自动加载路径
	'APP_AUTOLOAD_PATH'     => '@.System,@.Service,,@.Domain,@.Common,@.Base',

	/* 数据库 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', //数据库地址
    'DB_NAME'               => 'ngocn_center',          // 数据库名
    'DB_USER'               => 'root',      //用户名
    'DB_PWD'                => 'root',          // 用户密码
	'DB_PORT'               => '',        // 连接端口
    'DB_PREFIX'             => 'center_',    // 数据库表前缀
	
	/*Memcache设置*/
	'DATA_CACHE_TYPE' => 'Memcache',
	'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',
	'DATA_CACHE_TIME' => '1',




);
?>