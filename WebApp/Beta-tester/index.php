<?php
include 'header.php';

if (isLoggedIn()) {
    header("location: wall.php");
}
if (isset($_POST['key'])) {
    $userKey = clean($_POST['key']);
    $content = file_get_contents("pass");
    $keys = explode("\n", $content);
    $salt = "12@#4d";

    foreach ($keys as $key) {
        if ($userKey == md5(md5($key) . $salt)) {
            $_SESSION['user'] = 1;
            header("location: wall.php");
            break;
        }
    }
}
?>
<div class="row-fluid">
    <div class="span4 offset4">
        <form method="post">
            <h3>Enter your key</h3>
            <input name="key" type="text"/>
            <input type="submit" class="btn btn-primary" value="login"/>
        </form>
    </div>
</div>
