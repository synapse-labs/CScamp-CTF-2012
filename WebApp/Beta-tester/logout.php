<?php

include 'header.php';

session_destroy();

if(isLoggedIn()){
    header("location: index.php");
}

?>
