<!DOCTYPE html>
<?php require('cfg.php'); ?>
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
<body class="bg7">
<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<div class="content">
		<div class="question">	
			<h2>My extensive branches are<br> used to craft stand-alone live edge furniture that evolve into <br>pieces of art. <br>Who am I?</h2>
		</div>
    <?php require('fragment/option.php'); ?>
		<a href="options.html">
			<div class="back">	
			<p>← go back</p>
		</div>
		</a>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
</body>
</html>
