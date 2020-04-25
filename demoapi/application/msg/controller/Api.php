<?php
namespace app\msg\controller;
use app\api\controller\BaseApi;
use app\msg\model\MsgModel;
class Api extends BaseApi {
	private $msg_db;
	function _initialize(){
		parent::_initialize();        
        $this->msg_db = new MsgModel();
	}
    
	/**
	 * 发送消息
	 */
	function sendMessage(){	  
		$return = $this->msg_db->sendMsg();
		$this->jsonOutput($return);
	}
    
    
    /**
     * 消息列表
     */
	function msgList(){
	   $return = $this->msg_db->msgList();
	   $this->jsonOutput($return);
	}
}
