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
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="apple-ipad-icon" href="/apple-ipad-icon.png"/>

  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js" ></script>

</head>

<body class="startbackground">
	<div class="content">
    <?php if ($submitted == 'y') { ?>
      <div id="thankYouNote" class="success">
        <p>Thank you for your participation.</p>
      </div>
      <script type="text/javascript">
        window.setTimeout(
          function() {
            $("#thankYouNote").remove();
          },
          5000
        );
      </script>
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
