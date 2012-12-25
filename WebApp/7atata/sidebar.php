<div class="sidebar"><div class="sidebars1"><div class="sidebars2">
<div class="box small">
<?php
if(strpos($_SERVER['REQUEST_URI'],'s3Cr3T')){
	//If it's our hidden admin directory then display the admin functions not the news
	print '<h4>Admin functions</h4>
	<div class="textarea"><br />';
	print '<a href="?do=news">Add news</a>
	<div class="news_line"/></div>';
	print 'The upload function is under maintenance, in the meantime use FTP.';
}else{
	print '<h4>Latest news</h4>
	<div class="textarea"><br />';
	$q = mysql_query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT 0,5;");
	while($r = mysql_fetch_array($q)){
	print '<a href="news.php?id='.$r['id'].'">'.$r['title'].'</a>
				<div class="news_line"/></div>';
	}
}
?>
</div>
</div>
<div class="clear"></div>
</div></div></div>