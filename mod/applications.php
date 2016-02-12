<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
if(isset($_REQUEST['action']) && $_REQUEST['action']=="appwrite")
{
     if(!empty($_REQUEST['clid'])){ $clid=$_REQUEST['clid']; $clid=mysql_escape_string($clid);}
       if(!empty($_REQUEST['adid'])){ $adid=$_REQUEST['adid']; $adid=mysql_escape_string($adid);}
	   if(!empty($_REQUEST['text'])){ $text=$_REQUEST['text']; $text=mysql_escape_string($text);}
        echo "...".$clid."...".$adid."...".$text;
        $sql="INSERT INTO applications (clid, adid, text) VALUES ($clid, $adid, '$text')";
       if(ExecFromDB($sql)==TRUE)
			{
              ?><script>alert("Заявка успешно добавлена!");</script><?
			   echo "<script>document.location.replace('/orders');</script>";
            }
			else
			{
                ?><script>alert("Ошибка при добавлении!");</script><?
                //echo "<script>document.location.replace('/orders');</script>";
			}		   
}
else
{
    echo "<script>document.location.replace('/main');</script>";
}