<?php	
	
    function mysqlConnect()
	{
        $link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    }
	function mysqlisset($request)
	{
		$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		mysql_select_db(DB_NAME,$link);
		$dbresult=mysql_query($request); 
		$n=mysql_num_rows($dbresult);
		if (!($n)) { 
			return FALSE;
	    } 
		else 
		{
         	return TRUE;
        } 
	}
function SelectFromDBArray($sql)
{
	$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
	$result = mysql_query ($sql);
	if(!$result)
	{
		if(DEBUG=='on')
		echo "SelectFromDBArray Ошибка БД!: <br>\n".mysql_error()."<br>\n SQL:<br>\n".$sql;
		else
		 	echo "Ошибка БД!";
		return false;
	}	
	$res = array();
	while($row = mysql_fetch_assoc($result))
		$res[]=$row;
	return $res;
}
function SelectFirstFromDB($sql)
{
	$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
	$result = mysql_query ($sql);
	if(!$result)
	{
		echo "2 Ошибка БД!: ".mysql_error();
		return false;
	}	
	if($row = mysql_fetch_assoc($result))
		return $row;
	return  false;
}
function ExecFromDB($sql)
{
	$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
	$result = mysql_query ($sql);
	if(!$result)
	{
		echo "3 Ошибка БД!: ".mysql_error();
		return false;
	}	
	return  true;
}
function countCells($sql)
{
	$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
	$res=mysql_query($sql);
	if(!$res)
	{
		echo "SelectFromDBArray Ошибка БД!: <br>\n".mysql_error()."<br>\n SQL:<br>\n".$sql;
		return false;
	}	else
	$res=mysql_numrows($res);
	return $res;
}

/*function writetoDB($sql)
{
	$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
	$result = mysql_query ($sql);
			$res= mysql_query("$sql");
		if($res)	
		{
			
			return TRUE;
		}
		else
		{
			echo "3 Ошибка БД!: ".mysql_error();
			return FALSE;
		}
}	
*/