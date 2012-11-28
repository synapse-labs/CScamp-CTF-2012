<?php include_once 'functions.php'; ?>
<html>
    <head>
        <title>Beta Test</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <script type="text/javascript" src="js/jq.js"></script>
        <script type="text/javascript" src="js/transition.js"></script>
        <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
        <script type="text/javascript" src="js/modal.js"></script>
    </head>
    <body style="background-color: #f9f9f9;">
        <div class="container-fluid">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <a href="index.php" class="brand">Beta Test</a>
                    <ul class="nav">
                        <?php if (isLoggedIn()): ?>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="discussion.php">Post an issue</a></li>
                        <?php else: ?>
                            <li><a href="register.php">Register</a></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="nav pull-right">
                        <?php if (isLoggedIn()): ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10 offset1">
