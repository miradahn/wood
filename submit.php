<!DOCTYPE html>
<?php require('cfg.php');
$page=req('p');
$correct=req('c') == 'y' ? true : false;

if (!$correct) {
  header("Location: $page.php", true, 302);
}

$answer=req('a');
$woodName=woodName($page, $answer);
?>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to Artemano</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <p>Sign up for your chance to win a <span class="larger">$3000 Artemano shopping spree</span>, and stay up to date on our newest blogs, trends and more.</p>
        <p class="fineprint">Unsubscribe at any time.</p>
        
      
        <div class="email">	
        <input type="text" name="e" placeholder="Type your email here" />
        <input type="hidden" name="p" value="<?=$page?>" />
        <input type="hidden" name="a" value="<?=$answer?>" />
        <input type="hidden" name="s" value="y" />
        </div>
      </div>
    
      <div class="buttonswrap">
      <ul>
        <li class="buttons">	
          <input type="submit" value="Submit" class="submit"/>
        </li>
        <li class="buttons2">	
          <a href="options.html"><p>Try Again</p></a>
        </li>
        </ul>
      </div>
    </form>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
</body>
</html>
