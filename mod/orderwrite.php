<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
include_once(LIBPATH."db.php");
if($_REQUEST['action']=="orderwrite")
{
       if(!empty($_REQUEST['title'])){ $title=$_REQUEST['title']; $title=mysql_escape_string($title);}
       if(!empty($_REQUEST['region'])){ $region=$_REQUEST['region']; $region=mysql_escape_string($region);}
       if(!empty($_REQUEST['catid'])){ $catid=$_REQUEST['catid']; $catid=mysql_escape_string($catid);}
       if(!empty($_REQUEST['term'])){ $term=$_REQUEST['term']; $term=mysql_escape_string($term);}
       if(!empty($_REQUEST['workload'])){ $workload=$_REQUEST['workload']; $workload=mysql_escape_string($workload);}
	   if(!empty($_REQUEST['adtext'])){ $adtext=$_REQUEST['adtext']; $adtext=mysql_escape_string($adtext);}
        $userid=mysql_escape_string($_SESSION['userid']); 
       $sql="INSERT INTO ads (userid, title, regionid,  firstid,  term, workload, adtext)
				VALUES ($userid, '$title', '$region','$catid', '$term', '$workload', '$adtext');";
			if(ExecFromDB($sql)==TRUE)
			{
              ?><script>alert("Заказ успешно добавлен!");</script><?
			   echo "<script>document.location.replace('/main');</script>";
            }
			else
			{
                ?><script>alert("Ошибка при добавлении!");</script><?
                echo "<script>document.location.replace('/main');</script>";
			}		   
}
if($_REQUEST['action']=="orderred")
{
   
    if(isset($_REQUEST['orderid']))
    {
        if(!empty($_REQUEST['title'])){ $title=$_REQUEST['title']; $title=mysql_escape_string($title);}
       if(!empty($_REQUEST['region'])){ $region=$_REQUEST['region']; $region=mysql_escape_string($region);}
       if(!empty($_REQUEST['catid'])){ $catid=$_REQUEST['catid']; $firstid=mysql_escape_string($catid);}
       if(!empty($_REQUEST['term'])){ $term=$_REQUEST['term']; $term=mysql_escape_string($term);}
       if(!empty($_REQUEST['workload'])){ $workload=$_REQUEST['workload']; $workload=mysql_escape_string($workload);}
	   if(!empty($_REQUEST['adtext'])){ $adtext=$_REQUEST['adtext']; $adtext=mysql_escape_string($adtext);}
       if(!empty($_REQUEST['orderid'])){ $orderid=$_REQUEST['orderid']; $orderid=mysql_escape_string($orderid);}
       $userid=mysql_escape_string($_SESSION['userid']); 
        $sql="UPDATE ads SET  title='$title',regionid='$region',firstid='$firstid',term='$term',
                                workload='$workload',adtext='$adtext', userid='$userid' where id=$orderid";
        if(ExecFromDB($sql)==TRUE)
			{
              ?><script>alert("Заказ успешно добавлен!");</script><?
			   echo "<script>document.location.replace('/main');</script>";
            }
			else
			{
                ?><script>alert("Ошибка при добавлении!");</script><?
                echo "<script>document.location.replace('/main');</script>";
			}		   
    }
}