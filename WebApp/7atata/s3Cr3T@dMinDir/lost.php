<?php
session_start();
require_once("../conf.php");
require_once("../header.php");
print '<div class="content">
		<div class="box single">';
if($_POST['submit']){
	$mail = $_POST['email'];
	$username = $_POST['username'];
	if($username === 'admin'){
		if($mail === 'admin@foo.bar'){
			print 'An email has been sent to admin@foo.bar containing the password';
		}else{
			print 'PHP ERROR: Couldn\'t connect to mail server.<br/>';
			print 'Traceback:';
			print '<br /><b>Line 16:&nbsp;&nbsp;</b> print \'Email has been sent to \'.htmlentities($mail).\' containing the password\';
			<br /><b>Line 17:&nbsp;&nbsp;</b> $message = \'The admin password is: querty1234\';
			<br /><b>Line 18:&nbsp;&nbsp;</b> $headers = \'From: webmaster@synapse-labs.com\' . "\r\n" .
				<br /><b>Line 19:&nbsp;&nbsp;&nbsp;&nbsp;</b> \'Reply-To: webmaster@synapse-labs.com\' . "\r\n" .
				<br /><b>Line 20:&nbsp;&nbsp;&nbsp;&nbsp;</b> \'X-Mailer: PHP/\' . phpversion();
			<br /><b>Line 21:&nbsp;&nbsp;</b> $m = mail($mail, \'Password reset\', $message, $headers);
			<br /><b>Line 22:&nbsp;&nbsp;</b> if($m) print \'Mail sent!\';';
		}
	}else{
		print 'User doesn\'t exist';
	}
}else{
		print '<form action="" method="post">';
		print 'username:&nbsp; <input type="text" name="username" />';
		print '<input type="hidden" name="email" value="admin@foo.bar" />';
		print '<input type="submit" name="submit" value="restore" /><br /><br />';
		print '</form>';
}

print '</p>
		 </div>
		</div>';
require_once("../sidebar.php");
require_once("../footer.php");
?>
