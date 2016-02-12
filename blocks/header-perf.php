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
						<li><a href="#a" class="popup-with-zoom-anim button">Изменить ФИО/Название компании</a></li>
						<div id="a" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h3>Изменить ФИО/Название компании</h3>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="name">
                                            <input type="text" name="name" value="<?if(!empty($arr['name'])) echo $arr['name'];?>"/>
											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#b" class="popup-with-zoom-anim button">Изменить фото профиля</a></li>
						<div id="b" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить фото профиля</h2>
									</div>

									<div class="small-dialog-content">
										<form action="#" method="get" >
											<div class="form">
											
											<label class="upload-btn">
											    <input type="file" multiple="">
											    <i class="fa fa-upload"></i> Выбрать
											</label>
											<span class="fake-input">Нет выбранных</span>
										</div>
											
													

											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#c" class="popup-with-zoom-anim button">Изменить статус</a></li>
						<div id="c" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить статус</h2>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="busy">
											<input type="text" name="busy" placeholder="Занят или свободен" value="<?if(!empty($arr['busy'])) echo $arr['busy'];?>"/>
											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#d" class="popup-with-zoom-anim button">Изменить контактные данные</a></li>
						<div id="d" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить контактные данные</h2>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="contacts">
											<input type="email" name="email"  placeholder="Электронная почта"  value="<?if(!empty($arr['email'])) echo $arr['email'];?>"/>
											<input type="text"  name="phone"  placeholder="Контактный телефон" value="<?if(!empty($arr['phone'])) echo "+".$arr['phone'];?>"/>
											<input type="text"  name="region" placeholder="Местоположение"     value="<?if(!empty($arr['region'])) echo $arr['region'];?>"/>

											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#e" class="popup-with-zoom-anim button">Изменить описание</a></li>
						<div id="e" class="zoom-anim-dialog mfp-hide apply-popup">
									<div class="small-dialog-headline">
										<h2>Изменить описание</h2>
									</div>

									<div class="small-dialog-content">
										<form action="/redactor" method="get" >
											<INPUT TYPE=hidden NAME=action VALUE="description">
											<input type="text" name="description" placeholder="Описание" value="<?if(!empty($arr['description'])) echo $arr['description'];?>"/>
											<button class="send">Изменить</button>
										</form>
									</div>
									
						</div>
						<li><a href="#f" class="popup-with-zoom-anim button">Изменить пароль</a></li>
						<div id="f" class="zoom-anim-dialog mfp-hide apply-popup">
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
				
				<li><a href="/exit"><i class="fa fa-sign-out"></i> Выйти из профиля</a></li>
				
			</ul>

		</nav>
		

       
		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="index-4.html#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>