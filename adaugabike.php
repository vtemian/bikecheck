<? session_start();
include("conectare.php");
mysql_query("insert into biciclete(id_user,serie,marca,culoare,photo) values(".$_SESSION['id'].",".$_SESSION["serie"].",".$_POST["marca"].",".$_POST["culoare"].",".$_POST["photo"].")");?>