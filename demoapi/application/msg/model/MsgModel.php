<?php
namespace app\msg\model;
use think\Model;
class MsgModel extends Model {
	protected $emptyArr = array();
	protected $table 	= 'message';
	protected $pk        	= 'id';
    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        //parent::initialize();
        
    }
    
	function sendMsg(){
		$content = input('content');
        $userName = input('userName');
		if (!$content || !$userName) return showData($this->emptyArr, '消息不能为空', 400);
		$data = array(
			'UserName'	  	 => $userName,
			'Content' 	 => $content,
			'Add_time' => time(),
		);
		if ($this->insert($data)) {
		    $data['id'] = $this->getLastInsID();
			return showData($data, '消息发送成功',200);
		}else {
			return showData($this->emptyArr, '消息发送失败', 400);
		}
	}
    
    function msgList()
    {
        $type = input('type');
        if($type == 1)
        {
            $where = 'id < '.input('id_hos');
        }
        elseif($type == 2)
        {
            $where = 'id > '.input('id_new');
        }
        else
        {
            $where = array();
        }
        $total  = $this->where($where)->count();
		if ($total) {
			$page  = page($total);
			$limit = $page['offset'] .','. $page['limit'];
		} else {
			$page  = '';
            $limit = 0;
		}
         
        $list =$this->where($where)->order('id desc')->limit($limit)->select();     
        foreach($list as $lt)
        {
            $lt['Add_time'] = date('Y-m-d H:i:s',$lt['Add_time']);
        }  

        return showData(array_reverse($list), '获取成功', 200, $page);
        
    }
    
    
}
