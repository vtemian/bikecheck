<?php 
	include_once('conectare.php');
	include_once('functii.php');	
	include_once('includes/login.php');
	session_start();
?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Check!</title>
</head>	
<body>

	<div id="content">
		<img src="img/logo.png" class="logo">

		<div class="card" id="search-card">
			<h1>Verifica si inregistreaza-ti bicicleta.</h1>
			
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			
			<div class="search_bar">
				<form action="index.php" method="POST">
					<input type="text" name="serie" class="search"/>
						<a href="javascript:" id="search-btn"><img src="img/cauta.png"/></a>
					</a>
				</form>	
			</div>	
	
		</div>
	</div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/check.js"></script>
</body>
</html>
