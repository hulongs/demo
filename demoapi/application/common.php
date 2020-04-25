<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Request;
use think\Image;
use think\Upload;
define('IS_GET',Request::instance()->isGet());
define('IS_POST',Request::instance()->isPost());
define('IS_AJAX',Request::instance()->isAjax());
define('NOW_TIME',$_SERVER['REQUEST_TIME']);
defined('COMMON_PATH')  or define('COMMON_PATH',    APP_PATH); // 应用公共目录

function showData($data, $msg='', $code=0, $page=''){
	return array(
			'data'		 	=> $data,
			'msg'  			=> $msg,
			'code' 			=> $code,
			'page' 			=> $page
	);
}

/**
 * 分页函数
 * @param int $total
 * @return array
 */
function page($total) {
	$return 		= array ();
	$count 			= input('pageSize','0','intval') ? input('pageSize','0','intval') : 20;
	$page_count 	= max ( 1, ceil ( $total / $count ) );
	$page 			= input('page','0','intval') ? input('page','0','intval') :1;
	$page_next 		= min ( $page + 1, $page_count );
	$page_previous 	= max ( 1, $page - 1 );
	$offset 		= max ( 0, ( int ) (($page - 1) * $count) );

	$return = array (
			'total' 		=> (int) $total,
			'count' 		=> $count,
			'pageCount' 	=> $page_count,
			'page' 			=> $page,
			'page_next' 	=> $page_next,
			'page_previous' => $page_previous,
			'offset' 		=> $offset,
			'limit' 		=> $count
	);
	return $return;
}