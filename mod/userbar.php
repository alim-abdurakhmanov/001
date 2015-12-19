<?
require_once(LIBPATH."db.php");
	$sql="SELECT * FROM users where id='$userid'";
	$res = SelectFirstFromDB($sql);
	$name=$res['name'];
	echo $name;