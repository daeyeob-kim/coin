<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
<style>
body{
  width:100%;
}
body,div,p,span{
  margin: 0;
  padding: 0;
}

.body_contents{
  min-width:1024px;
  max-width:1200px;
  margin: 0 auto;
}
.header {
  width: 100%;
  height: 60px;
}
.header .site_title {
  width: 68px;
  height: 18px;
  margin:21px;
  margin-left: 40px;
  font-family: Gotham-Ultra;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #000000;
  display: inline-block;
}
.header .line {
  width: 100%;
  height: 1px;
  background-color: #efefef;
}
</style>
<div class="body_contents">
<div class="header">
	<p class="site_title">ICOGate</p>
	<select id="lang_select" style="float:right">
		<option value="ko" <?=($lang =='ko')?'selected':''?>>Korean</option>
		<option value="ja" <?=($lang =='ja')?'selected':''?>>Japanese</option>
		<option value="cn" <?=($lang =='cn')?'selected':''?>>China</option>
	</select>
	<br>
	<div class="line"></div>
</div>


<script>
$('#lang_select').change(function(){

	var url = $(location).attr('href');
	if(url.indexOf("lang") != -1){
		//기존 내용 변경하는걸로
		url = url + '&lang=' + $(this).val();
	}else{
		url = url + '&lang=' + $(this).val();
	}
	document.location.href = url;
});
	
</script>
