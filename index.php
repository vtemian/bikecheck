<?php 
	include_once('conectare.php');
	include_once('functii.php');
	session_start();
?>
<html>
	

	<head>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<title>Check!</title>
	</head>	
	<body>
		<?php		
		/*	if(isset($_POST['submit'])){ 
				$user=mysql_escape_string($_POST['utilizator']);
				$pass=mysql_escape_string($_POST['parola']);
				if(trim($user!='')){
					if(trim($pass!='')){
						login($user,$pass);	
					}else
						echo '<h3>Va rugam sa complectati campul parola</h3>';
					}else
						echo '<h3>Va rugam sa complectati campul utilizator</h3>';
				}else
					if(isset($_POST['logout'])){
						$_SESSION=array();
						$_SESSION['logat']=0;
	                	session_destroy();
	                		
					}
						if($_SESSION['logat']==1){
							echo '
								<h3>Bun venit '.$_SESSION['nume'].','.$_SESSION['prenume'].'</h3>
									<form action="index.php" method="POST">
										<input type="submit" name="logout" Value="Logout" />
									</form>	
								';
						}else{
							echo '
									<form action="index.php" method="POST">
										Utilizator:<input type="text" name="utilizator" /></br>
										Parola:<input type="password" name="parola" /></br>
										<input type="submit" name="submit" value="Login" />
									</form>';
						}*/
		?>
		<div class="title">
			<font color="#fff">check.</font>pedaleaza.ro
		</div>
		<div class="content" align="center">
			<p>Verifica si inregistreaza-ti bicicleta.</p>
			<div class="search_bar" >
				<form action="index.php" method="POST">
					<input type="text" name="serie" class="search"/>
					<a HREF="#" onClick="this.form.submit()" 
						onmouseover="button.src='img/cauta.png'" 
						onmouseout="button.src='img/cauta.png'">
						<IMG SRC="img/cauta.png" name="button" BORDER="0">
					</a>
				</form>	
			</div>	
		</div>	
	</body>
</html>
