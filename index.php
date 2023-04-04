<?php
header('Content-type:text/json');

if($_GET['mid']){
$link = array(
  'http'=> array(
    'method'=> "GET",
    'header'=> "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.62"
  )
);

// 以上面设置的 HTTP 头来打开文件
$data = file_get_contents('https://api.bilibili.com/x/space/wbi/acc/info?mid='.$_GET['mid'], false, stream_context_create($link));


if($_GET['all']){
    print(json_encode(json_decode($data, true), JSON_UNESCAPED_UNICODE));  
}else{// 简洁接口
    $arr = array(
        'name' => json_decode($data, true)['data']['name'],
        'sign' => json_decode($data, true)['data']['sign'],
        'face' => json_decode($data, true)['data']['face'],
    );
    print(json_encode($arr, JSON_UNESCAPED_UNICODE));
}

}else{
    print('请补充完整参数');
}

?>
