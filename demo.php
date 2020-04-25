<?php
/**
 * @author huolong
 * @deprecated API接口测试
 * @copyright 2020
 */
 
  $apiUrl = 'http://localhost/demoapi/public/msg/api/';
  $action = $_GET['action'];
  if($action =='send')
  {
      $params = array(
          'userName' => $_GET['userName'],
          'content'  => $_GET['content'],
      );
      $data = http($apiUrl.'sendMessage',$params,'POST');
      $rs = json_decode($data);
      echo json_encode($rs->data);
     // echo($data);
  }
  else
  {
     $params =array(
           'type' => $_GET['type'],
           'id_hos' => $_GET['id_hos'],
           'id_new' => $_GET['id_new'],
     );
     $data = http($apiUrl.'msgList',$params);

     $rs = json_decode($data);
    
     echo json_encode($rs->data);
  }
 
 
/**
 * [http 调用接口函数]
 * @param  string       $url     [接口地址]
 * @param  array        $params  [数组]
 * @param  string       $method  [GET\POST\DELETE\PUT]
 * @param  array        $header  [HTTP头信息]
 * @param  integer      $timeout [超时时间]
 * @return [type]                [接口返回数据]
 */
function http($url, $params, $method = 'GET', $header = array(), $timeout = 5)
{
    // POST 提交方式的传入 $params 必须是字符串形式
    $opts = array(
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => $header
    );

    /* 根据请求类型设置特定参数 */
    switch (strtoupper($method)) {
        case 'GET':
            $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
            break;
        case 'POST':
            $params = http_build_query($params);
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        case 'DELETE':
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_HTTPHEADER] = array("X-HTTP-Method-Override: DELETE");
            $opts[CURLOPT_CUSTOMREQUEST] = 'DELETE';
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        case 'PUT':
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_POST] = 0;
            $opts[CURLOPT_CUSTOMREQUEST] = 'PUT';
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        default:
            throw new Exception('不支持的请求方式！');
    }
  
    /* 初始化并执行curl请求 */
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    $data = curl_exec($ch);
    $error = curl_error($ch);
    return $data;
}


?>