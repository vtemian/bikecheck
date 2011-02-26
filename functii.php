<?php 
	session_start();
	function login ($user,$pass){
		$pass=md5($pass);
		$query="SELECT * FROM users WHERE email='".$user."' AND password='".$pass."'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		if($row!=null){
			$_SESSION['nume']=$row['nume'];
			$_SESSION['prenume']=$row['prenume'];
			$_SESSION['logat']=1;
			return TRUE;
		}
		return FALSE;
	}
	function mailcheck($field)
 	{
	  
	  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
	
	  if(filter_var($field, FILTER_VALIDATE_EMAIL))
	  {
	    return TRUE;
	  }
	  else
	  {
	    return FALSE;
	  }
  	}
?>