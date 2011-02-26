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
				Seria bicicletei tale este singurul lucru care te leaga de ea. “Make a difference” si
				inregistreaza-ti bicicleta pe site-ul nostru protejand-o de un viitor furt !!!</p>
			
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
