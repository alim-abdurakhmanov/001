<?php
function auth_loginTo($login,$pass)
{
		$login= core_inputCheck($login);
		$pass=  auth_getPwHash(core_inputCheck($pass));
		$sql="select * from users where email='$login' and password='$pass'";
		$res=SelectFirstFromDB($sql);
		if($res)
		{
			$_SESSION['userid'] = $res['id'];			
			return TRUE;
		}	
	return false;
}

function auth_logout()
{
	unset($_SESSION['userid']);
    unset($_SESSION['type']);
}

function auth_getUserId()
{
	if(isset($_SESSION['userid']))
	   return $_SESSION['userid'];
	return 0;
}

function auth_checkAuth()
{	
	if(isset($_SESSION['userid']))
	   if(auth_getStatus($_SESSION['userid'])<>0) return false;
	return (isset ($_SESSION['userid']));
}

function auth_getRole($userid)
{
	$sql="select role from users where id=$userid";
	$row=SelectFirstFromDB($sql);
	if($row!=false && ($row["role"]=="admin" || $row["role"]=="user"))
	{
		return $row["role"];
	}
	else
		return FALSE;	 
}

function auth_getStatus($userid)
{
	$sql="select status from users where id=$userid";
	$row=SelectFirstFromDB($sql);
	if($row!=false)
	{
		return $row["status"];
	}
	else return FALSE;
}

function auth_getPwHash($pw)
{
	return sha1($pw);	
}
/*
function auth_checkData($login, $mail)
{
	 $login=SelectFirstFromDB("select * from users where login='$login'");
	 $mail=SelectFirstFromDB("select * from users where `e-mail`='$mail'");
	 if($login==FALSE)
	 {
		  if($mail==FALSE)
			{
				return 0;
			}
		  else return 1;
	 }
	 else return 2;
}*/




