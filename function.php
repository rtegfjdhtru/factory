<?php


ini_set('log_errors','on');
ini_set('error_log','contact');

$err_msg=array();




session_start();

session_regenerate_id();

//デバック

$debug_flg = false;

function debug($str){
    global  $debug_flg;
    if(!empty($debug_flg)){
        error_log('デバック:'.$str);
    }
}

define('MSG01','必須項目です');
define('MSG02','Emailの形式で入力してください');
define('MSG03','５００文字以内で入力してください');
define('SUG01','メールを送信しました');


debug('>>>>>>>>>>>>>>>>>>');
debug('コンタクトフォーム');
debug('>>>>>>>>>>>>>>>>>>');

//バリデーションチェック用関数
//未入力確認
function validRequired($str,$key){
    if($str === ''){
        global $err_msg;
        $err_msg[$key]= MSG01;
    }
}

//emailの形式か
function validemail($str,$key){
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\?\*\[|\]%'=~^\{\}\/\+!#&\$\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/",$str)){
        global $err_msg;
        $err_msg[$key] = MSG02;
    }
}

//500文字以内か
function validMaxtext($str,$key,$max = 500){
    if(mb_strlen($str) > $max){
        global $err_msg;
        $err_msg[$key] = MSG03;
    }
}



function msgmail($key){
   if(!empty($_SESSION[$key])){
       $data= $_SESSION[$key];
       $_SESSION[$key] = '';
       return $data;
   }
}
