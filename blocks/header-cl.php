<header>
<?  require_once(LIBPATH."db.php");
    if(isset($_SESSION['userid'])) $id=$_SESSION['userid'];
    $res=SelectFirstFromDB("SELECT * from users where id=$id");  
    if($res!=false) $arr=$res;
 ?>
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
				
				
				<li class=""><a href="#" class="sf-with-ul"><i class="fa fa-user"></i><?if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></a>
					<ul style="display: none;">
						<li><a href="myorders">Мои заказы</a></li>
						<li><a href="#g" class="popup-with-zoom-anim button">Изменить данные</a></li>
						<div id="g" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить данные</h2>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="namemail">
											<input type="text" name="name" placeholder="ФИО/Название компании" value="<?if(!empty($arr['name'])) echo $arr['name'];?>"/>
											<input type="email" name="email" placeholder="E-mail"  value="<?if(!empty($arr['email'])) echo $arr['email'];?>"/>
											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#h" class="popup-with-zoom-anim button">Изменить пароль</a></li>
						<div id="h" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить пароль</h2>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="password">
											<input name="oldpass" type="password" placeholder="Введите старый пароль" value=""/>
											<input   type="password" placeholder="Новый пароль" value=""/>
											<input name="pass"  type="password" placeholder="Подтвердите новый пароль" value=""/>
													

											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						
					</ul>
				</li>
				<li><a href="add-order"><i class="fa fa-plus"></i> Добавить заказ</a></li>
				<li><a href="/exit"><i class="fa fa-sign-out"></i> Выйти</a></li>
				
			</ul>

		</nav>
		

       
		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="index-4.html#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>