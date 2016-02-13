<?
$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME,$link);
$sum = 5; // число записей на странице

if(isset($_REQUEST['region']) && isset($_REQUEST['category']))
{
    if(!empty($_REQUEST['region']) && !empty($_REQUEST['category']))
    { 
        $region=$_REQUEST['region']; $reg=mysql_escape_string($region);
        $category=$_REQUEST['category']; $cat=mysql_escape_string($category);
        $result = mysql_query("SELECT count(*) as a from ads CROSS JOIN categories ON ads.firstid = categories.id where ads.regionid=$reg and ads.firstid=$cat"); 
    }
}
elseif(isset($_REQUEST['category']))
{
    if(!empty($_REQUEST['category'])){ $category=$_REQUEST['category']; $cat=mysql_escape_string($category);
        $result = mysql_query("SELECT count(*) as a from ads CROSS JOIN categories ON ads.firstid = categories.id where ads.firstid=$cat"); 
    }
}
elseif(isset($_REQUEST['region']))
{
    if(!empty($_REQUEST['region'])){ $region=$_REQUEST['region']; $reg=mysql_escape_string($region);
        $result = mysql_query("SELECT count(*) as a from ads CROSS JOIN categories ON ads.firstid = categories.id where ads.regionid=$reg"); 
    }
}

else
{
    $result = mysql_query("SELECT count(*) as a from ads CROSS JOIN categories ON ads.firstid = categories.id"); 
    
}
//count -- считает  количество элементов массива 
$arr = mysql_fetch_row($result); // возвращает неассоциативный массив 
$rec = $arr[0];  // общее число записей в таблице  
		   
// если страницы не существует, выводим первую страницу
if(!isset($_GET['str']))
{$str = 0;}
else
{$str = $_GET['str'];}
		   
// получем номер начальной записи страницы
$start = $str * $sum;
		   
// запрос 
if(isset($_REQUEST['region'])&& isset($_REQUEST['category']))
{
     $r = mysql_query("SELECT ads.id, ads.firstid, ads.title, ads.adtext,  ads.date, categories.first, regions.region
                        FROM (ads CROSS JOIN categories ON ads.firstid = categories.id)
                         CROSS JOIN regions ON regions.id=ads.regionid
                         where ads.regionid=$reg and ads.firstid=$cat LIMIT $start, $sum");

}

elseif(isset($_REQUEST['category']))
{
       $r = mysql_query("SELECT ads.id, ads.firstid, ads.title, ads.adtext,  ads.date, categories.first, regions.region
                        FROM (ads CROSS JOIN categories ON ads.firstid = categories.id)
                         CROSS JOIN regions ON regions.id=ads.regionid
                         where ads.firstid=$cat");
}
elseif(isset($_REQUEST['region']))
{
     $r = mysql_query("SELECT ads.id, ads.firstid, ads.title, ads.adtext,  ads.date, categories.first, regions.region
                        FROM (ads CROSS JOIN categories ON ads.firstid = categories.id)
                         CROSS JOIN regions ON regions.id=ads.regionid
                         where ads.regionid=$reg LIMIT $start, $sum");

}


else
{
    $r = mysql_query("SELECT ads.id, ads.firstid, ads.title, ads.adtext,  ads.date, categories.first, regions.region
                        FROM (ads CROSS JOIN categories ON ads.firstid = categories.id) CROSS JOIN regions ON regions.id=ads.regionid LIMIT $start, $sum");
    
}
$n = mysql_num_rows($r); // возвращаем число рядов результата запроса
		   
// если страница не первая, выводим ссылку НАЗАД

		   
// выводим записи
