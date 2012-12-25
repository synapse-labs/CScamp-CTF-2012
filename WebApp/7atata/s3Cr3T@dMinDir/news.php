<?php
if($_POST['submit']){
			$date = time();
			$title = secure($_POST['title']);
			$body  = secure($_POST['body']);
			$add = mysql_query("INSERT INTO `news` VALUES (NULL, '$title', '$body',$date );");
			if($add) print 'Successfully added!';
		}else{
			print '<form action="?do=news" method="post">';
			print 'Title: <input name="title" type="text" /><br /><br />';
			print 'News:<br /> <textarea name="body" rows="15" cols="70" /></textarea><br /><br />';
			print '<input type="submit" name="submit" value="Add" /></form>';
}
?>