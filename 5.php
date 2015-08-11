<!DOCTYPE html>
<?php require('cfg.php'); ?>
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
<body class="bg5">
	<div class="content">
		<div class="question">	
      <?php require('fragment/tryagain.php'); ?>
			<h2>Built a long time ago,<br> I have been discovered by Artemano and given a fresh vibrant look. <br>Who am I?</h2>
		</div>
    <?php require('fragment/option.php'); ?>
		<a href="options.php">
			<div class="back">	
			<p>← go back</p>
		</div>
		</a>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
  <?php require('fragment/jsfooter.php'); ?>
</body>
</html>
