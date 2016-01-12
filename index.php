<?
 session_start();
  include ('config.php');
 // require_once (SERVER.'/index.php');
  require_once (LIBPATH.'core.php');
  require_once (LIBPATH.'auth.php');  

$correct_link=$_SERVER['REQUEST_URI'];

 $correct_link=check($correct_link);
 if(!$_SERVER['REQUEST_URI']==$correct_link&!$_SERVER['REQUEST_URI']=='/')
 {
    ErrorPage404();
 }
     
if (isset($_GET['id']))
{
  if ($_GET['id']=='registration')
   {
        include('registration.php');
   }
    elseif ($_GET['id']=='myorders')
   {
        include('myorders.php');
   }
   elseif ($_GET['id']=='add-order')
   {
        include('add-order.php');
   }
   elseif ($_GET['id']=='add-order')
   {
        include('add-order.php');
   }
    elseif ($_GET['id']=='orders')
   {
        include('orders.php');
   }
   elseif ($_GET['id']=='main')
   {
        include('mainpage.php');
   }
    elseif ($_GET['id']=='performers')
   {
        include('performers.php');
   }
    elseif ($_GET['id']=='register')
   {
        include(MODPATH.'registrationproc.php');
   }
    elseif ($_GET['id']=='login')
   {
        include(MODPATH.'login.php');
   }
   elseif ($_GET['id']=='exit')
   {
        include(MODPATH.'exit.php');
   }
   elseif ($_GET['id']=='personal')
   {
        include('personal.php');
   }
    else
    {
        ErrorPage404();
    }
}
?>
