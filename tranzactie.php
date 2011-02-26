<?php session_start();
include("conectare.php");
mysql_query("UPDATE  biciclete SET  id_user =  '".$_REQUEST['id_user']."' WHERE  id ='".$_REQUEST['id']."'");
?>