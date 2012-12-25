<?php
session_start();
require_once("../conf.php");
require_once("../header.php");
print '<div class="content">
		<div class="box single">';
if($_SESSION['token']){
	if($_GET['do']==='news'){
		include('news.php');
	}else{
		print '<h3>Welcome to admin control panel</h3>
			<p>';
		print 'Please select a function from the side bar on the left';
	}
}else{
	print '<h3>Please log in</h3>
		<p>';
		print $_SESSION['token'];
	if($_POST['submit']){
		$mail = secure($_POST['mail']);
		$pass = md5($_POST['pass']);
		$time = time();
		$m = mysql_query("SELECT `password` FROM `users` WHERE `email` = '$mail';");
		$row = mysql_fetch_assoc($m);
		if($pass == $row['password']){
			$ip = $_SERVER['REMOTE_ADDR'];
			$id = genRandom(50);
			mysql_query("INSERT INTO `sessions` (`id` ,`email` ,`IP` ,`time`) VALUES ('$id', '$mail', '$ip', '$time');");
			$_SESSION['token'] = $id;
			print '<meta http-equiv="refresh" content="0;URL=index.php">';
		}else{
			print 'Wrong pass';
		}
	}else{
		print '<form action="" method="post">';
		print 'mail:&nbsp; <input type="text" name="mail" /><br /><br />';
		print 'pass: <input type="password" name="pass" /><br /><br />';
		print '<input type="submit" name="submit" value="login" /><br /><br />';
		print '<a href="lost.php">Lost password</a>';
		print '</form>';
	}
}

print '</p>
		 </div>
		</div>';
require_once("../sidebar.php");
require_once("../footer.php");
?>
