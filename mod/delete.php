<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
if($_REQUEST['action']=="orderdel")
{
    if($_REQUEST['orderid'])
    {
       if(!empty($_REQUEST['orderid'])){ $orderid=$_REQUEST['orderid']; $orderid=mysql_escape_string($orderid);}
       $sql="DELETE from ads where id=$orderid";
        if(ExecFromDB($sql)==TRUE)
			{
              ?><script>alert("Заказ успешно удален!");</script><?
			   echo "<script>document.location.replace('/myorders');</script>";
            }
			else
			{
                ?><script>alert("Ошибка при удалении!");</script><?
                echo $sql;
                //echo "<script>document.location.replace('/myorders');</script>";
			}		
    }
    else
    {
         echo "<script>document.location.replace('/myorders');</script>";
    }
}
else
{
     echo "<script>document.location.replace('/myorders');</script>";
}