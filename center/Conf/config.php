<?php
return array(
	//基础配置
	'SERVER_NAME'			=> 'http://www.center.com',

	//模板设置
	'TMPL_TEMPLATE_SUFFIX'  => '.tpl',		//模板文件后缀为.tpl  
	'TMPL_ENGINE_TYPE' 		=> 'PHP',		//模板语言为原生php
	
	//URL设置
	'URL_CASE_INSENSITIVE'  => FALSE,		//默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'             => 2,			//URL访问模式:REWRITE  模式
	'URL_HTML_SUFFIX'       => '',			//后缀为空
	'DEFAULT_MODULE'        => 'Index', 		// 默认模块名称
    'DEFAULT_ACTION'        => 'index', 	// 默认操作名称
	'AUTH_ERROR'			=> '',//用户验证失败跳转模块
	
	//类库自动加载设置
	'APP_AUTOLOAD_PATH'     => '@.System,@.Service,,@.Domain,@.Common,@.Base',

	/* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'ngocn_center',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
	'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => 'center_',    // 数据库表前缀
	
	/*Memcache设置*/
	'DATA_CACHE_TYPE' => 'Memcache',
	'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',
	'DATA_CACHE_TIME' => '1',


);
?>