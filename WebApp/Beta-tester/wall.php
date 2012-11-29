<?php
include 'header.php';
if (!isLoggedIn()) {
    header("location: index.php");
}
$dir = "project";
$tree = array(
    "index.php",
    "loop.php",
    "session.php",
);
?>

<div class="row-fluid">
    <div class="span12">
        <h3>Here are some files to test the Beta-test app.</h3>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <?php
        $i = 0;
        foreach ($tree as $file): $i++;
            ?>
            <?php
            $hash = getHash("project/" . $file);
            ?>
            <div class="span2 well">
                <div id="myModal<?php echo $i ?>" class="modal hide fade" file="<?php echo $hash ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-body">
                        <center><div class="loading">

                            </div></center>
                        <!--<br>-->
                    </div>
                </div>
                <a data-toggle="modal" href="#myModal<?php echo $i ?>">project/<?php echo $file; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.modal').on('shown', function (e) {
            var modal = $(this);
            file = $(modal).attr('file');
            $.ajax({
                type:"GET",
                data: {'file':file} ,
                url: "getContent.php",
                success: function(html) {
                    $(modal).html(html);
                }
            });
        });
        $('.modal').on('hidden', function (e) {
            var modal = $(this);
            $(modal).html('<div class="modal-body"><center><div class="loading"></div></center><!--<br>--></div>');
        });
            
    });
    
</script>