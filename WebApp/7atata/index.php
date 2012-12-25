<?php
session_start();
include("conf.php");
include("header.php");
print '<div class="content">
		<div class="box single">
		<h3>Welcome to foobar furniture designs</h3>
		<p>';
print 'Welcome to our website, please head over to <a href="work.php">our works</a> page to check our portfolio, and check our <a href="news.php">news</a> page.';
print '<img src="'.$siteURL.'imagecache.php?img=welcome.png" alt="Foobar designs" class="png" />';
print '</p>
		 </div>
		</div>';
include("sidebar.php");
include("footer.php");
?>