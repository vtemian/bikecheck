<? session_start();
include("conectare.php");
$_SESSION['serie']=$_POST["serie"];
$logat=isset($_SESSION['logat']);

if(trim($_POST["serie"]))
{
	$var=mysql_query("select id_user,furat from biciclete where serie='".$_POST["serie"]."'");
$row=mysql_fetch_array($var);
if($row)
if($row["furat"]==true)
 {
	 $var=mysql_query("select email from users where id='".$row['id_user']."'");
 
 $row=mysql_fetch_array($var);
 $to = $row['email'];
 $subject = "S-a gasit bicicleta furata";
 $ip=@$REMOTE_ADDR;
 $tags = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress='.$ip);
 $date=getdate();
 $body = "S-a gasit bicicleta ta in ".$tags['city'].",".$date['hours']." : ".$date['minutes']." ".$date['mday'].".".$date['month'].".".$date['year'];
// mail($to, $subject, $body);
echo "mail trimis";
 

 }
 else
 {
 echo "tranzactie";
if($logat)
{
$var=mysql_query("select email from users where id='".$row['id_user']."'");
$id_uer=$row['id_user'];
$row=mysql_fetch_array($var);
$to = $row['email'];
 $subject ="Tranzactie";
 $body=$_SESSION['nume']." vrea sa treci bicicleta pe numele lui <a href='".$_SERVER['PHP_SELF']."/tranzactie.php?id_user=".$_SESSION['id']."&id=".$id."'>confirma</a> ";}
 else
 {//logeazate
 }

 }
 else
 {
 echo "inscriere";
 if($logat)
 {
 //inregistreaza
 }
 else
{ //logeazate
}
 }
}else
{//back + incorect

}
?>
