<?php
include 'functions.php';
sleep(1);
if(!isLoggedIn()){
    header("location: index.php");
}

if(!isset($_GET['file'])){
    exit();
}

echo getContent($_GET['file']);
?>
