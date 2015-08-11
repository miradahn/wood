<?php require('cfg.php');
$page=req('p');
$correct=req('c') == 'y' ? true : false;

if (!$correct) {
  header("Location: $page.php", true, 302);
}

$answer=req('a');
$woodName=woodName($page, $answer);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to Artemano</title>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="style.css">
</head>
<body class="bg<?=$page?>">
	<div class="content">
    <form method="POST" action="index.php">
      <div class="box">	
        <h2>
          <?=$woodName?> -
          <?=$correct ? 'Correct' : 'Try again'?></h2>
        <p>Sign up for our newsletter for your chance to win a<br><span class="larger">$3000 Artemano shopping spree</span><br>and to stay up to date<br>on our newest blogs, trends and more.</p>    
        <div class="email">	
        <input type="email" name="e" placeholder="Type your email here" required />
        <input type="hidden" name="p" value="<?=$page?>" />
        <input type="hidden" name="a" value="<?=$answer?>" />
        <input type="hidden" name="s" value="y" />
        </div>
        <p class="fineprint">You can unsubscribe at any time.</p>
      </div>
    
      <div class="buttonswrap">
      <ul>
        <li class="buttons">	
          <input type="submit" value="Submit" class="submit"/>
        </li>
        <li class="buttons2">	
          <a href="options.php"><p>Try Again</p></a>
        </li>
        </ul>
      </div>
    </form>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
  <?php require('fragment/jsfooter.php'); ?>
</body>
</html>
