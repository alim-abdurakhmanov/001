<?php
require_once (LIBPATH.'db.php');

function ErrorPage404()
{
	die("ERROR 404");
}
function check($var)
{
  $var=preg_replace("/[^a-z0-9\.-]/i", "", $var);
  return $var;
}
function core_inputCheck($str)
	{
		mysqlConnect();	
		return mysql_real_escape_string($str);
	}
function core_showCatId($catid)
	{
		$sql="SELECT * from categ where id=$catid";
		$res=SelectFirstFromDB($sql);
		$name=$res['name'];
		return $name;
	}