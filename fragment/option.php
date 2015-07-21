<?php
/**
 * Render several selectable options, for use on the "questionnaire" screens.
 *
 * Expected variables in scope: 
 * $options: associative array. 
 *    Keys are strings represening page numbers. 
 *    Values are associate arrays of wood-name to associative array of form 
 *            'label'=>$humanReadableLabel,'correct'=$yOrN.
 */

$page=basename($_SERVER['SCRIPT_FILENAME'], '.php');
$correct=req('c') == 'y' ? true : false;
if(!$correct) { ?>
<h2>Try Again!</h2>
<?php } ?>
<?php foreach($options[$page] as $key => $wood) { ?>
  <a href="submit.php?<?="c=".$wood['correct']."&a=$key&p=$page"?>">
    <div class="answer">	
    <p><?=$wood['label']?></p>
  </div>
  </a>
<?php } ?>
