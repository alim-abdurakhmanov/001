<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once(LIBPATH."auth.php");
	include_once(LIBPATH."core.php");
	include_once(LIBPATH."db.php");
	$loginmsg='';
	$inComplit=false;
	if (!isset ($_SESSION['userid']))
	{
		if(isset($_POST['login'])&&isset($_POST['password']))
		{
		 
		  if(auth_loginTo($_POST['login'],$_POST['password']))
		  {
		$status=auth_getStatus($_SESSION['userid']);
				if($status=="100")
				{
					$loginmsg="Вы успешно вошли";
					$inComplit=true;
				}
			elseif($status=="0")
			{ 
				$loginmsg="Ваш аккаунт не активирован, перейдите по ссылке указанной в письмо";
			     $inComplit=false;
                 auth_logout(); 
            }
			elseif($status=="1")
			{ 
				$loginmsg="Ваш аккаунт заблокирован, обратитесь в Поддержку.";
                 $inComplit=false;
                auth_logout();
			}
			else 
            {   
                $loginmsg="Ваш аккаунт не активирован, перейдите по ссылке в сообщении 
						   отправленном при регистрации на указанный e-mail";
                 $inComplit=false;
                auth_logout();           
            }
          }
		  else{
			  $inComplit=false;
              $loginmsg="Неправильный логин или пароль!";
		  }
		}
	}	
	
	else
	{
		$loginmsg="Вы уже вошли в систему!";
	}

//echo $loginmsg;
if($inComplit)
{	
    echo "<script>document.location.replace('/main');</script>";
}else{
    ?><script>alert("<?echo "$loginmsg";?>");</script><?
    echo "<script>document.location.replace('/main');</script>";
}