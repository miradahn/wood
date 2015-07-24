<?php require('cfg.php');
$submitted=req('s');
$email=req('e');
$answer=req('a');
$page=req('p');

if ($submitted == 'y') { 
  notify($email, $page, $answer);
}
?>
<!DOCTYPE html>
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

<body class="startbackground">
	<div class="content">
    <?php if ($submitted == 'y') { ?>
      <div class="success">
        <p>Thank you for your participation.</p>
      </div>
    <?php } ?>
		<a href="options.php">
		<div class="startbutton">
			<h1>TAP HERE TO START</h1>	
			<h2>Learn about Artemano and share your answer for a chance to win a $3000 Artemano shopping spree.</h2>
		</div>
		</a>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
  <?php require('fragment/jsfooter.php'); ?>
</body>

</html>
