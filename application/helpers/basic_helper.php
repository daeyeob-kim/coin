<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// 경고메세지를 경고창으로
function alert($msg='', $url='') {
	$CI =& get_instance();

	if (!$msg) $msg = '올바른 방법으로 이용하세요.';

	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'>alert('".$msg."');";
	
	if (!$url) echo "history.go(-1);";
	
	echo "</script>";

	if ($url) goto_url($url);
	exit;
}

function history_go_back() {
	$CI =& get_instance();
	
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'>";
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
// 해당 url로 이동
function goto_url($url) {
	/*$SITE_DOMAIN = "https://noraenote2-ongoz.c9users.io";
	$CI =& get_instance();
	$CI->load->helper('url');

	$temp = parse_url($url);
	if (empty($temp['host'])) {
		$CI =& get_instance();
		$url = ($temp['path'] != '/') ? $SITE_DOMAIN.'/'.$url : $SITE_DOMAIN;
		//$url = $CI->config->item('base_url').$url;
	}*/
	echo "<script type='text/javascript'> location.replace('".$url."'); </script>";
	exit;
}


function check_browser(){
    if(preg_match('/(iPhone|iPod|iPad)/', $_SERVER['HTTP_USER_AGENT'])){
        $os = "ios";
    }
    elseif(preg_match('/(Android)/', $_SERVER['HTTP_USER_AGENT'])){
        $os = "android";
    }
    else {
        $os = "etc";
    }
    return $os;
}
?>