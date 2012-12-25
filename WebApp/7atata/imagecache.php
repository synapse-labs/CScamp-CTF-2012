<?php
$img = 'images/'.$_GET['img'];
if($cacheON !== false){
	header("Expires: Wed, 26 Sep 2012 05:00:00 GMT");
}else{
	// Tell the browser not to cache it.
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
}
if(strpos(realpath($img),dirname(__FILE__)) !== false){

function image_type($filename){
	$info = getimagesize($filename);
	if($info[0] > 0) return $info['mime'];
	else return false;
}
$type=image_type($img);
	if($type === 'image/png' OR $type === 'image/gif' OR $type === 'image/jpeg'){
		header('Content-type: image/png');
		// No need for reading just include it.
		/* $handle = fopen($img, "r");
		$contents = fread($handle, filesize($img));
		fclose($handle);
		*/
		header('Content-Disposition: inline;');
		include($img);

	}else{
		Print 'You evil hacker!';
	}
}else{
	print 'Unable to load image '.dirname(__FILE__).'/'.htmlentities($img).'!';
}
?>