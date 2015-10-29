<?php
	session_start();
	require_once (LIBPATH.'db.php');
	//require_once (LIBPATH.'auth.php');
	//require_once (LIBPATH.'htmltools.php');
	//require_once (LIBPATH.'newswork.php');
	
	
	function core_inputCheck($str)
	{
		mysqlConnect();	
		return mysql_real_escape_string($str);
	}
	
function core_transliterate($str){
    $tr = array(
        "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g","Д"=>"d",
        "Е"=>"e","Ё"=>"yo","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"c","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"yo","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"c","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"y","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
        " "=> "_", "."=> "", "/"=> "_"
    );
    return strtr($str,$tr);
}

function core_Linkgen($title)
	{
	 mysql_escape_string($title);
	 $title = mb_substr($title, 0,128); 
	   if (preg_match('/[^A-Za-z0-9_\-]/', $title)) {
         $title =core_transliterate($title); 	
         $title = preg_replace('/[^A-Za-z0-9_\-]/', '', $title);
        }
	 return $title;
	}
    function core_showCatId($catid)
	{
		$sql="SELECT * from categ where id=$catid";
		$res=SelectFirstFromDB($sql);
		$name=$res['name'];
		return $name;
	}