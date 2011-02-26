<?php session_start();
include("conectare.php");
$var=mysql_query("select * from biciclete where serie='".$_REQUEST["serie"]."'");
$row=mysql_fetch_array($var);

?>


<html >


<body>

<form method="post" action="bikeprofil.php">
	<label >Seria: <? echo  $row["serie"]; ?> </label>
    <input name="serie" type="hidden" value="<? echo $row["serie"]; ?>" /><br />
	Marca&nbsp;&nbsp; <input name="marca" type="text" value="<?  echo $row["marca"]; ?>" /><br />
	Culoare <input name="culoare" type="text" value="<?  echo $row["culoare"]; ?>"  /><br />
	Foto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="photo" type="text" value="<?  echo $row["photo"]; ?>"  /><br>
	Furat&nbsp;&nbsp;&nbsp;
	<input name="check" value="check" type="checkbox" <? if($row["furat"]==true) echo 'checked' ?> ><br>
	<input name="Submit1" type="submit" value="submit" /></form>

</body>

</html>
