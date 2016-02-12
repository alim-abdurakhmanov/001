<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?

require_once(LIBPATH."db.php");
function name($newname, $id)
{
    if(!empty($newname)){$newname=mysql_escape_string($newname);}
    $sql="UPDATE users SET  name='$newname' where id=$id";
    if(ExecFromDB($sql))
    {
        ?><script>alert("Имя успешно изменено");</script><?
        $_SESSION['name']=$newname;
        echo "<script>document.location.replace('/main');</script>";
    }
    else 
    {
        ?><script>alert("Ошибка изменения имени");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
}
function busy($busy, $id)
{
    if(!empty($busy)){$busy=mysql_escape_string($busy);}
    $sql="UPDATE users SET  busy='$busy' where id=$id";
    if(ExecFromDB($sql))
    {
        ?><script>alert("Статус успешно изменен");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
    else 
    {
        ?><script>alert("Ошибка изменения статуса");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
}

function contacts($phone, $email, $region, $id)
{
    if(!empty($phone)){$phone=mysql_escape_string($phone);}
    if(!empty($email)){$email=mysql_escape_string($email);}
    if(!empty($region)){$region=mysql_escape_string($region);}
    $sql="UPDATE users SET  region='$region', email='$email', phone='$phone' where id=$id";
    if(ExecFromDB($sql))
    {
        ?><script>alert("Контактная информация успешно изменена");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
    else 
    {
        ?><script>alert("Ошибка изменения контактной информации");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
}
function description($description, $id)
{
    if(!empty($description)){$description=mysql_escape_string($description);}
    $sql="UPDATE users SET  description='$description' where id=$id";
    if(ExecFromDB($sql))
    {
        ?><script>alert("Описание успешно изменено");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
    else 
    {
        ?><script>alert("Ошибка изменения описания");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
}
function pass($pass, $oldpass, $id)
{
     if(!empty($pass)){$pass=mysql_escape_string($pass);$pass=sha1($pass);}
     if(!empty($oldpass)){$oldpass=mysql_escape_string($oldpass);$oldpass=sha1($oldpass);}
     $sql="select * from users where id='$id' and password='$oldpass'";
	 $res=SelectFirstFromDB($sql);
    if($res)
    {
        $sql="UPDATE users SET  password='$pass' where id=$id";
        if(ExecFromDB($sql))
        {
            ?><script>alert("Пароль успешно изменен");</script><?
             echo "<script>document.location.replace('/main');</script>";
        }
        else 
        {
             ?><script>alert("Ошибка изменения пароля");</script><?
             echo "<script>document.location.replace('/main');</script>";
        }
    }
    else
    {
        ?><script>alert("Ошибка! Неправильный пароль!");</script><?
        echo "<script>document.location.replace('/main');</script>";
    }
}
function namemail($name, $email, $id)
{
    if(!empty($name)){$name=mysql_escape_string($name);}
    if(!empty($email)){$email=mysql_escape_string($email);}
    $sql="UPDATE users SET  name='$name', email='$email' where id=$id";
        if(ExecFromDB($sql))
        {
            ?><script>alert("Данные успешно изменены");</script><?
              $_SESSION['name']=$newname;
             echo "<script>document.location.replace('/main');</script>";
        }
        else 
        {
             ?><script>alert("Ошибка изменения данных");</script><?
             echo "<script>document.location.replace('/main');</script>";
        }
}