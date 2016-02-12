<?
require_once(LIBPATH."redfun.php");
require_once(LIBPATH."auth.php");
if(isset($_SESSION['userid']))
{
    if($_REQUEST['action']=="name")
    {
        name($_REQUEST['name'],$_SESSION['userid']);
    }
    elseif($_REQUEST['action']=="busy")
    {
        busy($_REQUEST['busy'],$_SESSION['userid']);
    }
     elseif($_REQUEST['action']=="contacts")
    {
        contacts($_REQUEST['phone'],$_REQUEST['email'],$_REQUEST['region'],$_SESSION['userid']);
    }
     elseif($_REQUEST['action']=="description")
    {
        description($_REQUEST['description'],$_SESSION['userid']);
    }
     elseif($_REQUEST['action']=="password")
    {
        pass($_REQUEST['pass'], $_REQUEST['oldpass'], $_SESSION['userid']);
    }
      elseif($_REQUEST['action']=="namemail")
    {
        namemail($_REQUEST['name'], $_REQUEST['email'], $_SESSION['userid']);
    }
}
else
{
    ?><script>alert("Вы не имеете доступа к этой странице, авторизуйтесь!");</script><?
      echo "<script>document.location.replace('/main');</script>";
}