<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
require_once(LIBPATH."db.php");
if(isset($_SESSION['userid']))
{
    $userid=$_SESSION['userid'];
    $userid=mysql_escape_string($userid);
    $arr=SelectFromDBArray("SELECT * from ads where userid=$userid");
    if($arr==FALSE)
    {
         echo "<script>document.location.replace('/main');</script>";
    }
}