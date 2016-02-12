<?
include(LIBPATH."pageoutput.php");
include(LIBPATH."db.php");


$table="ads";
$start_pos=0;
$res=SelectFirstFromDB("Select Count(*) as col from ads");
if($res) $count=$res['col'];
$perpage=10;
dbout($table,$start_pos,$_REQUEST['pagesname']);
