<?php
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['pass'] = 'pass';
$db['name'] = 'hackme';
$siteURL = 'http://localhost/hackme/';
date_default_timezone_set('Egypt');
header("Content-type: text/html; charset=utf-8");

$c = @mysql_connect($db['host'],$db['user'],$db['pass']);
if(!$c) exit('Can\'t connect to mysql');
$q = @mysql_select_db($db['name']);
if(!$q) exit('Can\'t select database');


function getUserInfo($token){
	if($token){
		$q = mysql_query("SELECT `email` FROM `sessions` WHERE `id`='$token';");
		$r = mysql_fetch_assoc($q);
		$email = $r['email'];
		$q = mysql_query("SELECT `id`,`name`,`group`,`email` FROM `users` WHERE `email` = '$email';");
		$row = mysql_fetch_assoc($q);
		return $row;
	}else{
		return false;
	}
}

function genRandom($len = 10){
    $allChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#^&*_-+|[],.?';
    $charCount = strlen($allChars);
    $result = '';
	for ($i = 0; $i < $len; $i++) {
		$rand = mt_rand(0, $charCount-1);
		$result .= $allChars[$rand];
    }
    return $result;
}
function secure($param){
	$param = strip_tags($param);
	$param = mysql_real_escape_string($param);
	$param = str_replace('&amp;','&',$param);
	return $param;
}
?>