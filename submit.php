<!DOCTYPE html>
<?php require('cfg.php');
$answer=$_REQUEST['a'];
$page=$_REQUEST['p'];
$correct=$_REQUEST['c'] == 'y' ? true : false;
$woodName=$options[$page][$answer]['label']
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
<body class="startbackground">
<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<div class="content">
		<div class="box">	
			<h2>
        <?=$woodName?> - 
        <?=$correct ? 'CORRECT!' : 'Wrong, try again!'?></h2>
			<p>Sign up for our email newsletter to receive your $100 gift card and be entered in our $3000 contest.</p>
			
		
			<div class="email">	
			<p>TYPE YOUR EMAIL HERE</p>
			</div>
		</div>
	
		<div class="buttonswrap">
		<ul>
			<li class="buttons">	
				<a href="index.html"><p>Sumbit</p></a>
			</li>
			<li class="buttons2">	
				<a href="options.html"><p>Start Over</p></a>
			</li>
	    </ul>
	    </div>
		<div id="logo">
			<img class="logo" src="img/logo.png" alt="artemano">
		</div>
	</div>
</body>
</html>
