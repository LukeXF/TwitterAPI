<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Luke Brown Development</title>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div class="jumbotron top">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-md-offset-3">	
						<h1>Followers = <?php
							// set correct path!
							require_once("getTwitterFollowers.php");
							// change screen name to yours
							echo getTwitterFollowers('DiamondXF');
						?></h1>
						<h5><a href="https://github.com/LukeXF/TwitterAPI" target="_blank">GitHub</a></h5>
					</div>
				</div>
			</div>
		</div>

		<?php phpinfo(); ?>

	</body>
</html>