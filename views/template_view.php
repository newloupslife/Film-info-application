<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Film store</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class='header row'>
		<div class='wrapper'>
			<img src="./images/logo.jpg" width=1200px height=190px alt=""/>
		</div>
	</div>

	<div class='row'>	
		<div class='left_content col'>
            <?php
            include 'controllers/'.$left_controller;
            ?>
		</div>
		<div class='main_content col'>
			<?php
			include 'controllers/'.$controller;
			?>
		</div>
		<div class='right_content col'>

		</div>
	</div>
	<div class='footer row'>
	</div>

</body>
</html>

