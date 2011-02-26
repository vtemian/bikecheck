<? session_start();
include("conectare.php");
if(isset($_POST['check']))
$furat=true;
else
$furat=false;
mysql_query("
UPDATE  `biciclete` SET 
`marca` =  '".$_POST["marca"]."',
`culoare` =  '".$_POST["culoare"]."',
`furat` =  '".$furat."',
`photo` =  '".$_POST["photo"]."' WHERE  `biciclete`.`id_user` ='".$_SESSION['id']."' AND `serie` =  '".$_POST["serie"]."'");
?>