<?php
return array(
	//'配置项'=>'配置值'
	// 'APP_GROUP_LIST' => 'Index,Admin', //应用分组	
	// 'DEFAULT_GROUP' => 'Index',        //默认显示分组
	// 'APP_GROUP_MODE' =>1,              //分组模式，0 普通分组模式 1 独立分组模式
	// 'APP_GROUP_PATH'=> 'Modules',      //分组路径
	//'DEFAULT_MODULE'        =>  'Home',	  //默认显示分组
	/* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'tp_crm',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PREFIX'             => 'tp_',    // 数据库表前缀
    // /* SESSION 和 COOKIE 配置 */
    // 'SESSION_PREFIX' => 'crm_1', //ssion前缀
    // 'COOKIE_PREFIX'  => 'crm_1_', // Cookie前缀 避免冲突

    'SHOW_PAGE_TRACE' =>true,//调试页面Trace
    'URL_CASE_INSENSITIVE'  =>  true,  //URL地址不区分大小写
    //类库
    'AUTOLOAD_NAMESPACE' => array( 
       'Lib'     => APP_PATH.'Lib',
       )
);
?>