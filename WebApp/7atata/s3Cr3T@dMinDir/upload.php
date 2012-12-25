<?php
if($_POST['submit']){
			$target_path = '../images/'.pathinfo($_FILES['image']['name'],PATHINFO_FILENAME).'.jpg';
			$m = move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
			if($m) print 'Successfully uploaded image to '.realpath($target_path);
		}else{
			print '<form enctype="multipart/form-data" action="?do=upload" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
			Choose a file to upload: <input name="image" type="file" /><br />
			<input type="submit" name="submit" value="Upload image" />
			</form>';
}
?>