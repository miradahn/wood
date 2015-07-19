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
?>

<?php foreach($options[$page] as $key => $wood) { ?>
  <a href="submit.php?c=<?=$wood['correct']?>&a=<?=$key?>">
    <div class="answer">	
    <p><?=$wood['label']?></p>
  </div>
  </a>
<?php } ?>
