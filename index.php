<?php
header('Content-type:text/json');

if($_GET['mid']){
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.62"
  )
);

$context = stream_context_create($opts);

// 以下面设置的 HTTP 头来打开文件
$file = file_get_contents('https://api.bilibili.com/x/space/wbi/acc/info?mid='.$_GET['mid'], false, $context);
$json = json_decode($file, true);


if($_GET['type']=='all'||$_GET['type']!=null){
    $str = json_encode($json, JSON_UNESCAPED_UNICODE);
    print_r($json[$str]);  
}else{// 简洁接口
    $arr = array(
        'name' => $json['data']['name'],
        'sign' => $json['data']['sign'] ,
        'avatar' => $json['data']['face']
    );
    $str = json_encode($arr, JSON_UNESCAPED_UNICODE);
    print($str);
}






}else{
    print('请补充完整参数');
}

?>
