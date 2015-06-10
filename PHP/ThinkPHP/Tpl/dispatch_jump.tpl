<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
	if(!empty($status)){
		$tip = '成功提示';
	}else{
		$tip = '失败提示';
	}
	echo $tip;
?></title>
<style type="text/css">
*{margin:0;padding:0;border:0;}
html, body{width:100%;height:100%;text-align:center;word-break:break-all;word-wrap:break-word;white-space:normal;color:#444;font-family:"Microsoft YaHei",Arial,Helvetica,sans-serif;font-size:12px;line-height:1.5;}
a{color:#3e94dd;outline:0;text-decoration:none;}
a:hover{text-decoration:underline;color:#d19911;}
.wrap, .bigico, .content, .vam{display:inline-block;*display:inline;*zoom:1;vertical-align:middle;}
.vam{width:0;height:100%;overflow:hidden;}
.wrap{padding:28px 100px;border:1px solid #b3cfe7;margin:0 auto;background:#e9f3fb;font-size:18px;text-align:left;}
.error{border:1px solid #f68383;background:#fff0f0;}
.bigico{width:65px;height:70px;background:url('http://school.iknei.test/Public/images/rightwrong.jpg') no-repeat;margin-right:20px;}
.error .bigico{background-position:0 -70px;}
.content{width:300px;}
</style>
</head>.
<body>
	<div class="wrap <?php if(empty($status)) echo 'error'; ?>">
		<span class="bigico"></span><div class="content"><?php if(isset($message)) echo $message;if(isset($error)) echo $error;  ?><div><span id="J_timeleft"><?php echo($waitSecond); ?></span>秒后页面自动<a id="J_href" href="<?php echo($jumpUrl); ?>">跳转页面</a></div></div>
	</div>
	<span class="vam"></span>
</body>
<script type="text/javascript">
(function(){
var wait = document.getElementById('J_timeleft'),
	href = document.getElementById('J_href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</html>
