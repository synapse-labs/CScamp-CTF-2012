<?php
include_once 'header.php';

if (!isLoggedIn()) {
    header('location: index.php');
}


if (isset($_POST['submit'])):
?>
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-success">
            Thanks for your input, we will take care of that.
        </div>
    </div>
</div>
<?php endif; ?>
<form action="discussion.php" method="post" id="add" style="height: 400px;" class="form-horizontal">
    <h3>post an issue</h3>
    <input type="text" name="title" placeholder="Title" style="padding: 16px; width: 300px"/><br><br>
    <textarea placeholder="Content of your message" name="body" rows="6" cols="40" style="width: 300px;"></textarea><br><br>
    <input type="submit" name="submit" value="Add" class="btn btn-primary btn-large"/>
</form>

