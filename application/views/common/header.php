<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href="/static/css/common.css" type="text/css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://unpkg.com/tippy.js@2.0.9/dist/tippy.all.min.js"></script>
</head>
<body>
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

$(document).ready(function(){
    tippy('[title]', {
        interactive: 'hover',
        arrow: 'true',
        arrowType: 'round',
        animation: 'shift-away',
    })
});
	
</script>