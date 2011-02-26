<?php session_start(); ?>


<html >


<body>

<form method="post" action="adaugabike.php">
	Serie&nbsp;&nbsp;&nbsp;&nbsp; <input name="serie" type="text" value="<?php  echo $_SESSION['serie']; ?>" /><br />
	Marca&nbsp;&nbsp; <input name="marca" type="text" /><br />
	Culoare <input name="culoare" type="text" /><br />
	Foto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="photo" type="text" /><br />
	<input name="Submit1" type="submit" value="submit" /></form>

</body>

</html>
