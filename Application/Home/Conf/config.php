<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX' => '',
	//模板相关配置
	'TMPL_PARSE_STRING'=>array(
		'__Public__' => __ROOT__.'/Public',
		'__Css__' => __ROOT__.'/Public/css',
		'__Js__' => __ROOT__.'/Public/js',
		'__Image__'=>__ROOT__.'/Public/image'
		),
	'TMPL_ACTION_ERROR'     =>  APP_PATH.'Home/Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  APP_PATH.'Home/Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE'   =>  APP_PATH.'Home/Tpl/think_exception.tpl',// 异常页面的模板文件
);