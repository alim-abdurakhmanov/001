<?//выбор шапки для авторизованных пользователей
require_once(LIBPATH."db.php");
if(isset($_SESSION['userid']))
{
	$id=$_SESSION['userid'];
    if(!isset($_SESSION['type']))
    {
        $arr=SelectFirstFromDB("SELECT type from users where id=$id");
        $_SESSION['type']=$arr['type'];
    }
    if($_SESSION['type']!=FALSE)
    {
        if($_SESSION['type']=="cust")
        {
            include(TMPALATEPATH."header-cl.php");
        }
        if($_SESSION['type']=="perf")
        {
            include(TMPALATEPATH."header-perf.php");
        }
        if($_SESSION['type']=="admin")
        {
             include(TMPALATEPATH."header-adm.php");
        }        
    }
    else
    {
        ?><script>alert('Не указан тип пользователя, либо пользователя не существует!');</script><?
    }
}
else{//Header неавторизованого пользователя
?>

<header>

<div class="container" >
	<div class="sixteen columns" >
		<!-- Logo -->
		<div id="logo">
			<h1><a href="main"><img src="images/logo.png" alt="" /></a></h1>
		</div>
		
		
		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="main">Главная</a>
					
				</li>
				<li><a href="orders">Заказы</a>
					
				</li>

				<li><a href="performers">Исполнители</a>
					
				</li>				
			</ul>
			
			<ul class="responsive float-right">
				<li><a href="add-order"><i class="fa fa-plus"></i> Добавить заказ</a></li>
				
				<li><a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-user"></i> Войти</a></li>
				
				<li><a href="registration"><i class="fa fa-user"></i> Регистрация</a></li>
			</ul>

		</nav>
		<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Вход в личный кабинет</h2>
					</div>

					<div class="small-dialog-content">
						<form action="/login" method="post" >
							<input name="login"	type="email" placeholder="Электронная почта" value=""/>
							<input name="password" type="password" placeholder="Пароль" value=""/>
							<input type="submit" value="Войти">
						</form>
					</div>
					
		</div>

       
		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="index-4.html#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<?}?>