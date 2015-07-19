<?php
/** 
 * Assorted functions.
 * Include at start of each page.
 */

/**
 * @param name: String 
 * @param correct: 'y' or 'n'
 */
function wood($name, $correct) { 
  return array('label'=>$name, 'correct'=>$correct);
}

$options=array(
  '1'=>array(
    'mango'=> wood('Mango Wood', 'y'),
    'suar'=>  wood('Suar', 'n'), 
    'acacia' => wood('Acacia', 'n')
  ),
  '2'=>array(
    'suar'=>  wood('Suar', 'n'), 
    'acacia' => wood('Acacia', 'y'),
    'rosewood'=> wood('Indian Rosewood', 'n')
  ),
  '3'=>array(
    'boat'=>  wood('Recycled Boat Wood', 'n'), 
    'acacia' => wood('Acacia', 'n'),
    'rosewood'=> wood('Indian Rosewood', 'y')
  ),
  '4'=>array(
    'boat'=>  wood('Recycled Boat Wood', 'y'), 
    'antique'=> wood('Semi-Antique Wood', 'n'),
    'mango' => wood('Mango Wood', 'n'),
  ),
  '5'=>array(
    'mango'=>  wood('Mango Wood', 'n'), 
    'rosewood'=> wood('Indian Rosewood', 'n'),
    'antique' => wood('Semi-Antique Wood', 'y'),
  ),
  '6'=>array(
    'mango'=>  wood('Mango Wood', 'n'), 
    'rosewood'=> wood('Indian Rosewood', 'n'),
    'antique' => wood('Semi-Antique Wood', 'y'),
  ),
);
?>
