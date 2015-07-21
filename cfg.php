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

$email_recipients=array(
  'frig.neutron@gmail.com', 
  'miradahn@gmail.com');

$options=array(
  '1'=>array(
    'mango'=> wood('Mango Wood', 'y'),
    'suar'=>  wood('Suar', 'n'), 
    'acacia' => wood('Acacia', 'n'),
  ),
  '2'=>array(
    'suar'=>  wood('Suar', 'n'), 
    'acacia' => wood('Acacia', 'y'),
    'rosewood'=> wood('Indian Rosewood', 'n'),
  ),
  '3'=>array(
    'boat'=>  wood('Recycled Boat Wood', 'n'), 
    'acacia' => wood('Acacia', 'n'),
    'rosewood'=> wood('Indian Rosewood', 'y'),
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
    'antique'=>  wood('Semi-Antique Wood', 'n'), 
    'railway'=> wood('Recycled Railway Wood', 'n'),
    'boat' => wood('Recycled Boat Wood', 'y'),
  ),
  '7'=>array(
    'teak'=>  wood('Teak', 'n'), 
    'acacia'=> wood('Acacia', 'n'),
    'suar' => wood('Suar', 'y'),
  ),
  '8'=>array(
    'teak'=>  wood('Teak', 'y'), 
    'antique'=> wood('Semi-Antique Wood', 'n'),
    'acacia' => wood('Acacia', 'n'),
  ),
);


/**
 * Find name of wood identified by 'answer' on page $page.
 */
function woodName($page, $answer) { 
  global $options;
  $name=$options[$page][$answer]['label'];
  return $name;
}

/**
 * Find identifier of the correct answer on page $page.
 */
function rightAnswer($page) {
  global $options;
  $woods=$options[$page];
  foreach($woods as $ident => $info) { 
    if ($info['correct'] == 'y') {
      return $ident;
    }
  }
  return '';
}

function req($var) {
  return isset($_REQUEST[$var]) ? $_REQUEST[$var] : "";
}

function notify($applicant, $questionNumber, $answer) { 
  global $email_recipients;
  $subject = "Contest Entry - Vaughn Mills";
  $wood = woodName($questionNumber, $answer);
  $message = "$applicant \r\nQuestion #$questionNumber \r\nResponse $wood";
  $headers = 
      'From: webmaster@artemano.ca'."\r\n".
      'Reply-To: webmaster@artemano.ca'."\r\n".
      'X-Mailer: PHP/'.phpversion();

  foreach($email_recipients as $to) { 
    mail($to, $subject, $message, $headers);
  }
}
?>
