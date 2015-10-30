<?
 require_once ('config.php');
 require_once (LIBPATH.'core.php');

$correct_link=$_SERVER['REQUEST_URI'];

function check($var)
 {
  $var=preg_replace("/[^a-z0-9\.-]/i", "", $var);
  return $var;
 }
 $correct_link=check($correct_link);
 if (!$_SERVER['REQUEST_URI']==$correct_link&!$_SERVER['REQUEST_URI']=='/')
 {
    //ErrorPage404();
 }
 
if (isset($_GET['id']))
{
  include_once(TMPALATEPATH.'header.php');
  if ($_GET['id']=='orders')
  {
	   include(MODPATH.'orders.php');
  }
  elseif ($_GET['id']=='performers')
  {
	   include(MODPATH.'performers.php');
  }
	else
  {
    include_once(MODPATH.'main.php');
   //ErrorPage404();
  }
  include_once(TMPALATEPATH.'footer.php');
}