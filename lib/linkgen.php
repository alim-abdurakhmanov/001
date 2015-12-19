<?
	function genlink()
	{
		$uniqid = sha1(uniqid(rand(),1));
		//$link="http://dboard.ru/registration?regid=".$uniqid;
		return $uniqid ;
	}
	function writelink($link,$userid)
	{
			$sql = ExecFromDB("UPDATE users set actid='$link' WHERE id=$userid");
    			//Если вставка прошла успешно
   				 if ($sql==TRUE)
				 {
					return 1;
  				 } else {
        		echo mysql_error();
				return 0;
				}
	}
	function sendlink($link,$email)
	{
		$title = substr(htmlspecialchars(trim("Подтверждение регистрации")), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($link)), 0, 1000000); 
        // $t o - кому отправляем 
        // $from - от кого 
        $from="activation@mail.ru"; 
        // функция, которая отправляет наше письмо
        mail($email, $title, $mess, 'From:'.$from); 
	}
	
	function proc_actlink($userid)
	{
	if(isset($_POST['email']))
	{
		$writrstatus=0;
		$link=genlink();
		$writestatus=writelink($link,$userid);
		$link="http://buildex-des.ru/registration?regid=$link";
		if($writestatus!=0)
		{
			sendlink($link,$_POST['email']);
		}
	}
	else
	{
		echo"Вы не должны здесь находиться.";
	}
	}
	function activation($id)
	{

		$row = SelectFirstFromDB("SELECT * FROM users WHERE actid = '$id'");
		if($row)
		{

			if($row['actid']==$id)
			{
				if($row['status']==0)
				{
					$status=$row['status'];
					$result = ExecFromDB("UPDATE users SET status= 100  WHERE actid='$id'");
					return 0;
					//echo "<h1>Ваша учетная запись успешно активирована!</h1>";
				}
				else
				{
					return 1;
					//echo "<h1>Ваша учетная запись уже активирована!</h1>";
				}
			}
			else
			{
				return 2;
				//echo "<h1>Неверная ссылка!</h1>";
			}

		}
	}