<?php
/**
 * 红包任务
 */
if (!isset($_SERVER['REMOTE_ADDR']))
{
    $token ='463a3807918a1223f28ea9a472866497';
    $url = 'http://127.0.0.1/wallet/api/overRedpacket?token='.$token;
    //$url = 'http://192.168.0.159:8080/wallet/api/overRedpacket?token='.$token;
    $val = curl_file_get_contents($url); 
    print_r($val).'<br />';
}
 
 function curl_file_get_contents($durl){  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $durl);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回    
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回    
    $r = curl_exec($ch);  
    curl_close($ch);  
    return $r;  
}     


?>