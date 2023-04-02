# bilibili

## 使用例子：

``` url
127.0.0.1?mid=2033
```
其中<code>2033</code>为你的mid

得到的是整理过的json，json包括<b>姓名</b>、<b>个性签名</b>、<b>头像</b>

如:
``` json
   {
        "name":"初音MIKU",
        "sign":"",
        "avatar":"http:\/\/i0.hdslb.com\/bfs\/face\/member\/noface.jpg"
    }
```

携带参数如：
``` url
127.0.0.1?mid=2033&type=all
```

则得到
``` json
{
	"code": 0,
	"message": "0",
	"ttl": 1,
	"data": {
		"mid": 2033,
		"name": "初音MIKU",
		"sex": "保密",
		"face": "http:\/\/i0.hdslb.com\/bfs\/face\/member\/noface.jpg",
		"face_nft": 0,
		"face_nft_type": 0,
		"sign": "",
		"rank": 10000,
		"level": 1,
		"jointime": 0
```
嗯,很多，所以为了节省时间不进行全部展示



1. 因为写的比较随意，如果有能力二开可以常考原文章接口a 
<a href="https://www.bilibili.com/read/cv3430609/">传送门</a>
