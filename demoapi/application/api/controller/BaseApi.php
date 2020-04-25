<?php
/**
 * API公共类
 */
namespace app\api\controller;
use think\Controller;
class BaseApi extends Controller {
	protected $emptyArr = array();
	function _initialize(){	
	     
	}
	/**
	 * 输出json数据
	 * @param array $data
	 * @return
	 */
	function jsonOutput($data){ 
		header('Content-Type: text/html; charset=utf-8');
		$rs_data = array('code' => $data['code'],'msg'=> $data['msg'],'data' => $data['data']);
		$json = $rs_data;
		if ($data['page']){
			$newPage['total'] 		= $data['page']['total'];		//总条数
			$newPage['count'] 		= $data['page']['count'];		//返回记录的条数
			$newPage['pageCount'] 	= $data['page']['pageCount'];	//总页数
			$newPage['page'] 		= $data['page']['page'];		//当前页
			//如果下一页大于当前页
			if ($data['page']['page_next'] > $data['page']['page']) {
				$newPage['hasMore'] = 1;
			}else {
				$newPage['hasMore'] = 0;
			}
			$json['pageInfo'] = $newPage;
		}
        
		exit( json_encode($json,JSON_UNESCAPED_UNICODE) );
		//exit ( unicodeString(json_encode($json)) );
	}
    
    

}
