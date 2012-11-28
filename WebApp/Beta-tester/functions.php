<?php

session_start();
error_reporting(0);
function cleanGet($str) {
    //TODO
    return $str;
}

function clean($str) {
    if (get_magic_quotes_gpc() == 1) {
        $value = stripslashes($value);
    }
    $str = trim(htmlspecialchars($str, ENT_QUOTES, "utf-8")); //convert input into friendly characters to stop XSS
    $str = mysql_real_escape_string($str);

    return $str;
}

function isLoggedIn() {
    return isset($_SESSION['user']);
}

function cleanCheck($str) {
    if (get_magic_quotes_gpc() == 1) {
        $value = stripslashes($value);
    }
    if (preg_match('/script/', $str)) {
        exit('ATTCK "SCRIPT filtered"');
    }
    $str = mysql_real_escape_string($str);
    return $str;
}

function getHash($str) {
    $letters = "abcdefghijklmnopqrstuvwxyz./";
    $op = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $index = strpos($letters, $str[$i]);
        $op .= "!" . $index;
    }
    return $op;
}

function revHash($str) {
    $letters = "abcdefghijklmnopqrstuvwxyz./";
    $arr = array();
    for ($i = 0; $i < strlen($letters); $i++) {
        array_push($arr, $letters[$i]);
    }
    $hash = explode("!", $str);
    unset($hash[0]);
//    print_r($hash);
    $op = "";
    foreach ($hash as $int) {
        $op .= $letters[$int];
    }
    return $op;
}

function getContent($hash) {
    $file = revHash($hash);
    if(file_get_contents($file . "W")){
        echo file_get_contents($file . "W");
    }else{
        exit("<h3>Attach detected</h3>");
    }
    
//    echo $file;
}

//getContent("!15!17!14!9!4!2!19!27!8!13!3!4!23!26!15!7!15");
//echo gethash("/home/mohammadsamir/rars");
?>
