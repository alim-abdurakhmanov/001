<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
require_once(LIBPATH."linkgen.php");
if(!empty($_REQUEST['performer']) && $_REQUEST['performer']=="TRUE")
{
	$whois=whois();
	if($whois=="FL")
	{
		if(!empty($_REQUEST['fio'])){ $fio=$_REQUEST['fio']; $fio=mysql_escape_string($fio);}
		if(!empty($_REQUEST['email'])){ $email=$_REQUEST['email']; $email=mysql_escape_string($email);}
		if(!empty($_REQUEST['phone'])){ $phone=$_REQUEST['phone']; $phone=mysql_escape_string($phone);}
		if(!empty($_REQUEST['workid'])){ $workid=$_REQUEST['workid']; $workid=mysql_escape_string($workid);}
		if(!empty($_REQUEST['region'])){ $region=$_REQUEST['region']; $region=mysql_escape_string($region);}
		if(!empty($_REQUEST['pass'])){ $pass=$_REQUEST['pass']; $pass=mysql_escape_string($pass);}    
		$sql="INSERT INTO users (name, email, phone, password, workid, region, type, status, role)
				VALUES ('$fio','$email','$phone','$pass','$workid','$region', 'perf', '0', 'user');";
			if(ExecFromDB($sql)==TRUE)
			{
				proc_actlink(mysql_insert_id());
				echo "Вы успешно зарегистрированы! Письмо для активации отправлено на email";
			}
			else
			{
				echo "Ошибка при регистрации!";
			}			
	
	}
	elseif($whois=="UL")
	{
		if(!empty($_REQUEST['company'])){ $company=$_REQUEST['company']; $company=mysql_escape_string($company);}
		if(!empty($_REQUEST['email'])){ $email=$_REQUEST['email']; $email=mysql_escape_string($email);}
		if(!empty($_REQUEST['phone'])){ $phone=$_REQUEST['phone']; $phone=mysql_escape_string($phone);}
		if(!empty($_REQUEST['workid'])){ $workid=$_REQUEST['workid']; $workid=mysql_escape_string($workid);}
		if(!empty($_REQUEST['region'])){ $region=$_REQUEST['region']; $region=mysql_escape_string($region);}
		if(!empty($_REQUEST['logo'])){ $logo=$_REQUEST['logo']; logoMake($logo);}
		if(!empty($_REQUEST['pass'])){ $pass=$_REQUEST['pass']; $pass=mysql_escape_string($pass);} 
		$sql="INSERT INTO users (company, email, phone, password, region, workid, type, status, role)
				VALUES ('$company','$email','$phone','$pass','$region','$workid', 'perf', '0', 'user');";
			if(ExecFromDB($sql)==TRUE)
			{
				proc_actlink(mysql_insert_id());
				echo "Вы успешно зарегистрированы! Письмо для активации отправлено на email";
			}
			else
			{
				echo "Ошибка при регистрации!";
			}		
	}
	else die("Не указано лицо (ЮЛ/ФЛ)");
}

if((!empty($_REQUEST['customer']) && $_REQUEST['customer']=="TRUE"))
{
	
	$whois=whois();
	if($whois=="FL")
	{
		if(!empty($_REQUEST['fio'])){ $fio=$_REQUEST['fio']; $fio=mysql_escape_string($fio);}
		if(!empty($_REQUEST['email'])){ $email=$_REQUEST['email']; $email=mysql_escape_string($email);}
		if(!empty($_REQUEST['pass'])){ $pass=$_REQUEST['pass']; $pass=mysql_escape_string($pass);}
		$sql="INSERT INTO users (fio, email, password, type, status, role)
				VALUES ('$fio','$email','$pass', 'cust', '0', 'user');";
			if(ExecFromDB($sql)==TRUE)
			{
				proc_actlink(mysql_insert_id());
				echo "Вы успешно зарегистрированы! Письмо для активации отправлено на email";
			}
			else
			{
				echo "Ошибка при регистрации!";
			}		   
	}
	elseif($whois=="UL")
	{
		if(!empty($_REQUEST['company'])){ $company=$_REQUEST['company']; $company=mysql_escape_string($company);}
		if(!empty($_REQUEST['email'])){ $email=$_REQUEST['email']; $email=mysql_escape_string($email);}
		if(!empty($_REQUEST['pass'])){ $pass=$_REQUEST['pass']; $pass=mysql_escape_string($pass);}   
		$sql="INSERT INTO users (company, email, password,type, status, role)
				VALUES ('$company','$email','$pass', 'cust', '0', 'user');";
			if(ExecFromDB($sql)==TRUE)
			{
				proc_actlink(mysql_insert_id());
				echo "Вы успешно зарегистрированы! Письмо для активации отправлено на email";
			}
			else
			{
				echo "Ошибка при регистрации!";
			}		   
	}
	else die("Не указано лицо (ЮЛ/ФЛ)");
	 	
}
else if(isset($_REQUEST['regid']))
	{
		$actmsg=activation($_REQUEST['regid']);
		if($actmsg==0)
		   $regmsg="Ваша учетная запись успешно активирована!";
		else if($actmsg==1)
		   $regmsg="Ваша учетная запись уже была активирована!";
		else if($actmsg==1)
		   $regmsg="Неверная ссылка!";
	}

function whois()//Проверка на юр\физ лицо
{
	if(isset($_REQUEST['fio']) && !empty($_REQUEST['fio']))
	{
		return "FL";
	}
	if(isset($_REQUEST['company']) && (!empty($_REQUEST['company'])))
	{
		return "UL";
	}
	else return FALSE;
}
function logo()//выгрузка и форматирование логотипа компании
{
	
}