<?php
session_start();
include("conf.php");
include("header.php");
print '<div class="content">
		<div class="box single">
		<h3>Our portfolio</h3>
		<p>';
print '<a target="_blank" href="images/design_1.jpg"><img class="pic" src="images/design_1.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_2.jpg"><img class="pic" src="images/design_2.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_3.jpg"><img class="pic" src="images/design_3.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_4.jpg"><img class="pic" src="images/design_4.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_5.jpg"><img class="pic" src="images/design_5.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_6.jpg"><img class="pic" src="images/design_6.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_7.jpg"><img class="pic" src="images/design_7.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_8.jpg"><img class="pic" src="images/design_8.jpg" alt="" /></a>';
print '<a target="_blank" href="images/design_9.jpg"><img class="pic" src="images/design_9.jpg" alt="" /></a>';
print '</p>
		 </div>
		</div>';
include("sidebar.php");
include("footer.php");
?>