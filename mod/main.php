<?
include_once(LIBPATH.'db.php');
include_once(LIBPATH.'mainfun.php');
	$catarr=SelectFromDBArray("SELECT first,sec,third from categories");
include_once(TMPALATEPATH.'main.php');

