<?php
$page=basename($_SERVER['SCRIPT_FILENAME'], '.php');
$correct=req('c') == 'y' ? true : false;
if(!$correct) { ?>
<h2 class="tryagain">Try Again!</h2>
<?php } ?>
