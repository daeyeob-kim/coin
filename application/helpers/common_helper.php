<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function initLangSetting ($lang) {
    $CI =& get_instance();
    $CI->load->helper('cookie');
    
    if(isset($lang)){
        $cookie = array(
            'name'   => 'lang',
            'value'  => $lang,
            'expire' => '86500',
            'domain' => '.c9users.io',//나중에 변경!
            'path'   => '/',
            'prefix' => 'icogate_',
        );
        set_cookie($cookie);
        return $lang;
    }
    
    $lang = get_cookie('lang');
    if(isset($lang)){
        return $lang;
    }else{
        $cookie = array(
            'name'   => 'lang',
            'value'  => 'ko',
            'expire' => '86500',
            'domain' => '.c9users.io',
            'path'   => '/',
            'prefix' => 'icogate_',
        );
        set_cookie($cookie);
        return 'ko';
    }
}

function initHeaderSetting ($param) {
    $CI =& get_instance();
    
    $init_param = array(
        );
    $param = array_merge($init_param,$param);
    return $param;
}

function initFooterSetting ($param) {
    
    return $param;
}