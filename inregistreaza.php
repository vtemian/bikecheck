<?php 
	include_once('functii.php');
	include_once('conectare.php');
	session_start();
?>
<html>
	<head>
		<title>Check it!</title>
	</head>
	<body>
		<?php
			if(isset($_POST['submit'])){
				$email=mysql_escape_string($_POST['email']);
				$nume=mysql_escape_string($_POST['nume']);
				$prenume=mysql_escape_string($_POST['prenume']);
				$pass=mysql_escape_string($_POST['pass']);
				$pass2=mysql_escape_string($_POST['pass2']);
				$judet=mysql_escape_string($_POST['judet']);
				$localitate=mysql_escape_string($_POST['localitate']);
				$mobil=mysql_escape_string($_POST['mobil']);
				if(trim($nume)!=''){
					if(trim($prenume)!=''){
						if(trim($pass)!=''){
							if($pass==$pass2){
								if(trim($email)!=''){
									if(mailcheck($email)){
										$query="SELECT * FROM users WHERE nume='".$nume."' AND prenume='".$prenume."' OR email='".$email."'";
										$res=mysql_query($query);
										if($res){
											$row=mysql_fetch_array($res);
											if($row['nume']==null){
												$query="INSERT INTO users(nume,prenume,email,password,judet,localitate,telefon) VALUES('".$nume."','".$prenume."','".$email."','".md5($pass)."','".$judet."','".$localitate."','".$mobil."')";
												$result=mysql_query($query);
												if($result){
													echo 'Bun venit pe site! O sa primesti un mail de confirmare!<br /><a href="inregistreaza.php">Back</a>';
												}else
													echo '<h3>Eroare la inregistrarea datelor!</h3>';
													
											}else
												echo '<h3>Exista deja un utilizator cu aceste date inregistrat deja!</h3>';	
										}else
											echo '<h3>Probleme la selectarea datelor din baza de date!</h3>';		
									}else
										echo '<h3>Trebuie sa alegeti un e-mail valid!</h3>';
								}else
									echo '<h3>Trebuie sa complectezi campul e-mail!</h3>';
							}else
								echo '<h3>Cele doua parole nu coincid!</h3>';	
						}else
							echo '<h3>Trebuie sa alegi o parola!</h3>';
					}else
						echo '<h3>Trebuie sa complectezi campul prenume!</h3>';
				}else
					echo '<h3>Trebuie sa complectezi campul nume!</h3>';
			}else{
				echo '
					<form action="inregistreaza.php" method="POST">
						Nume:<input type="text" name="nume" /><br />
						Prenume:<input type="text" name="prenume" /><br />
						Parola:<input type="password" name="pass" /><br />
						Parola:<input type="password" name="pass2" /><br />
						E-mail:<input type="text" name="email" /><br />
						Judet:<input type="text" name="judet" /><br />
						Localitate:<input type="text" name="localitate" /><br />
						Mobil:<input type="text" name="mobil" /><br />
						<input type="submit" name="submit" value="Trimite" />
					</form>
				';
			}
		?>
	</body>
</html>