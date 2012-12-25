<?php
session_start();
include("conf.php");
include("header.php");
print '<div class="content">
		<div class="box single">';
		
if($_GET['id']){
	$id = mysql_real_escape_string($_GET['id']);
	$q = mysql_query("SELECT * FROM `news` WHERE `id` = '$id';");
	$news = mysql_fetch_assoc($q);
	if($news['title'])
	print '<h3>'.$news['title'].'</h3><br/><br/>'.$news['body'];
	else
	print '<h3>Article not found</h3>';
}else{
	$query = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT 0,5;";
	$q = mysql_query($query);
	if(!$q) print mysql_error();
	while($r = mysql_fetch_assoc($q)){
	print '<a href="news.php?id='.$r['id'].'">'.$r['title'].'</a>
				<div class="news_line"/></div>';
	}
}
print '</div>
		</div>';
include("sidebar.php");
include("footer.php");
?>