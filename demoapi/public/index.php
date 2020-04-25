<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
//系统时间
define('SYS_TIME', time());
//站点目录
define('SITE_DIR', dirname(__FILE__));
//上传文件保存根目录
define('UPLOADS', '/Uploads/');
//主机协议
define('SITE_PROTOCOL', isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://');
//站点地址
$site_url = trim(dirname($_SERVER['SCRIPT_NAME']), "\/\\");
if ('' == $site_url) {
	$site_url = $_SERVER['HTTP_HOST'];
}else {
	$site_url = $_SERVER['HTTP_HOST'] . '/' . $site_url;
}
define('SITE_URL', $site_url);
define('HEADER_URL',$_SERVER['HTTP_HOST']);
define('PURL',SITE_PROTOCOL.$_SERVER['HTTP_HOST'].'/static');
define('HDURL',SITE_PROTOCOL.HEADER_URL);
//来源
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
define('APP_DEBUG',true);
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
