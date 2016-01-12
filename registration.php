<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Регистрация</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/red.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div id="wrapper">

<!-- Header
================================================== -->
<?php include("blocks/header-out.php");
require_once(LIBPATH."db.php");
if(isset($_REQUEST['regid']))
{
	require_once(LIBPATH."linkgen.php");
	activation($_REQUEST['regid']);
}?>
<div class="clearfix"></div>
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-user"></i> Регистрация исполнителя / заказчика</h2>
		</div>

	</div>
</div>
<div class="container">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<div class="form">
					<ul class="tabs-nav">
						<li class="active"><a href="#tab1">Исполнитель</a></li>
						<li class=""><a href="#tab2">Заказчик</a></li>
					
					</ul>
				
					<div class="tabs-container">
					<!--Регистрация исполнителей-->
						<div class="tab-content" id="tab1" style="display: block;">
							
								<ul class="tabs-nav" >
									<li class="active" ><a href="#tab3" style="font-size:12px;">Физическое лицо</a></li>
									<li class=""><a href="#tab4" style="font-size:12px;">Юридическое лицо</a></li>
							
								</ul>
								<div class="tabs-container">
									<!--Регистрация исполнителя-ФЛ-->
									<div class="tab-content" id="tab3" style="display: block;">
									<form action="register" method="post">

										<div class="form">
											<h5>ФИО</h5>
											<input type="text" name="fio" placeholder="Введите ФИО">
										</div>
										<div class="form">
											<h5>Email</h5>
											<input name="email" class="search-field" type="text" placeholder="mail@example.com" value="">
										</div>
										<div class="form">
											<h5>Номер телефона</h5>
											<input name="phone" type="text" placeholder="+7(xxx)-xxx-xx-xx">
											<INPUT TYPE=hidden NAME="performer" VALUE="TRUE">
										</div>
										<div class="form">
											<div class="select">
												<h5>Выберите те работы, которые выполняете</h5>
												<select data-placeholder="Выберите из списка" class="chosen-select" multiple="" style="display: none;">
													<?$arr=SelectFromDBArray("SELECT * from categories");
													foreach($arr as $value)
													{?>
														<option value="<?echo $value['id']?>"><?echo $value['first']?></option>
												  <?}?>
												</select>
												<div class="chosen-container chosen-container-multi" style="width: 100%;" title=""><!-- <ul class="chosen-choices"><li class="search-field"><input type="text" value="Choose Categories" class="default" autocomplete="off" style="width: 149px;"></li></ul> --><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
											</div>
										</div>
										<div class="form">
											<h5>Регион, в котором Вы работаете</h5>
											<input name="region" class="search-field" type="text" placeholder="Введите название населенного пункта" value="">
											
										</div>
										<div class="form">
											<h5>Фото профиля <span>(не обязательно)</span></h5>
											<label class="upload-btn">
											    <input type="file" multiple="">
											    <i class="fa fa-upload"></i> Выбрать
											</label>
											<span class="fake-input">Нет выбранных</span>
										</div>
										<div class="form">
											<h5>Придумайте пароль</h5>
											<input class="search-field" type="password" placeholder="Пароль" value="">
										</div>
										<div class="form">
											<h5>Повторите пароль</h5>
											<input name="pass" class="search-field" type="password" placeholder="Подтверждение пароля" value="">
										</div>
										<div class="divider margin-top-0"></div>
										<div class="notification notice closeable margin-bottom-40">
											<p><span>Что дальше?</span> После регистрации Вы можете видеть контактную информацию заказов и оставлять заявки. Для получения максимальной эффективности, добавьте свои расценки, текст о себе, текущий статус после регистрации в личном кабинете.</p>
										</div>
										<!--<a href="#" class="button big margin-top-5">Зарегистрироваться<i class="fa fa-arrow-circle-right"></i></a>-->
										<input type="submit" value="Зарегистрироваться">            
									</form>
										
									</div>
									<!--Регистрация исполнителя-ЮЛ-->
									<div class="tab-content" id="tab4" style="display: none;">
										<form action="register" method="post">
											<div class="form">
											<h5>Наименование компании</h5>
											<input type="text" name="company" placeholder="Введите название">
										</div>
										<div class="form">
											<h5>Email</h5>
											<input name="email" class="search-field" name="email" type="text" placeholder="mail@example.com" value="">
										</div>
										<div class="form">
											<h5>Контактный номер телефона</h5>
											<input type="text" name="phone" placeholder="+7(xxx)-xxx-xx-xx">
										</div>
										<div class="form">
											<div class="select">
												<h5>Выберите те работы, которые выполняет компания</h5>
												<select data-placeholder="Выберите из списка"  multiple name="workid[]" class="chosen-select" style="display: none;">
													<?$arr=SelectFromDBArray("SELECT * from categories");
													foreach($arr as $value)
													{?>
														<option value="<?echo $value['id']?>"><?echo $value['first']?></option>
												  <?}?>
												</select>
												<div class="chosen-container chosen-container-multi" style="width: 100%;" title=""><!-- <ul class="chosen-choices"><li class="search-field"><input type="text" value="Choose Categories" class="default" autocomplete="off" style="width: 149px;"></li></ul> --><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
											</div>
										</div>
										<div class="form">
											<h5>Регион, в котором Вы работаете</h5>
											<input name="region" class="search-field" name="region" type="text" placeholder="Введите название населенного пункта" value="">
											<INPUT TYPE=hidden NAME="performer" VALUE="TRUE">
										</div>
										<div class="form">
											<h5>Логотип компании <span>(не обязательно)</span></h5>
											<label class="upload-btn">
											    <input type="file" name="logo" multiple="">
											    <i class="fa fa-upload"></i> Выбрать
											</label>
											<span class="fake-input">Нет выбранных</span>
										</div>
										<div class="form">
											<h5>Придумайте пароль</h5>
											<input class="search-field" type="password" placeholder="Пароль" value="">
										</div>
										<div class="form">
											<h5>Повторите пароль</h5>
											<input name="pass" class="search-field" type="password" placeholder="Подтверждение пароля" value="">
										</div>
										<div class="divider margin-top-0"></div>
										<div class="notification notice closeable margin-bottom-40">
											<p><span>Что дальше?</span> После регистрации Вы можете видеть контактную информацию заказов и оставлять заявки. Для получения максимальной эффективности, добавьте свои расценки, текст о компании, текущий статус после регистрации в личном кабинете.</p>
										</div>
										<!--<a href="#" class="button big margin-top-5">Зарегистрироваться<i class="fa fa-arrow-circle-right"></i></a>-->
										<input type="submit" value="Зарегистрироваться">            
									</form>
									</div>

								</div>
							
					
						</div>
						<!--Регистрация заказчиков-->
						<div class="tab-content" id="tab2" style="display: none;">
								<ul class="tabs-nav">
									<li class="active"><a href="#tab3" style="font-size:12px;">Физическое лицо</a></li>
									<li class=""><a href="#tab4" style="font-size:12px;">Юридическое лицо</a></li>
								
								</ul>
								<div class="tabs-container">
									<!--Регистрация заказчика-ФЛ-->
									<div class="tab-content" id="tab3" style="display: block;">

										<form action="register" method="post">
										<div class="form">
											<h5>ФИО</h5>
											<input type="text" name="fio" placeholder="Введите ФИО" value="true">
											<INPUT TYPE=hidden NAME="customer" VALUE="TRUE">
										</div>
										<div class="form">
											<h5>Email</h5>
											<input name="email" class="search-field" name="email" type="text" placeholder="mail@example.com" value="">
										</div>
										
										<div class="form">
											<h5>Придумайте пароль</h5>
											<input class="search-field" type="password" placeholder="Пароль" value="">
										</div>
										<div class="form">
											<h5>Повторите пароль</h5>
											<input name="pass" class="search-field" type="password" placeholder="Подтверждение пароля" value="">
										</div>
										<div class="divider margin-top-0"></div>
										<div class="notification notice closeable margin-bottom-40">
											<p><span>Что дальше?</span> После регистрации Вы можете добавлять заказы, видеть контакную информацию исполнителей. </p>
										</div>
										<!--<a href="#" class="button big margin-top-5">Зарегистрироваться<i class="fa fa-arrow-circle-right"></i></a>-->
										<input type="submit" value="Зарегистрироваться">            
									</form>

									</div>
                                                    <!--Регистрация заказчика-ЮЛ-->
                                                                    
                                                                        <div class="tab-content" id="tab4" style="display: none;">
                                                                            <form action="register" method="post">
                                                                                <div class="form">
                                                                                        <h5>Наименование компании</h5>
                                                                                        <input type="text" name="company" placeholder="Введите ФИО" value="true">
                                                                                		<INPUT TYPE=hidden NAME="customer" VALUE="TRUE">
																				</div>
                                                                                <div class="form">
                                                                                        <h5>Email</h5>
                                                                                        <input name="email" class="search-field" type="text" placeholder="mail@example.com" value="">
                                                                                </div>
               
                                                                                <div class="form">
                                                                                        <h5>Придумайте пароль</h5>
                                                                                        <input class="search-field" type="password" placeholder="Пароль" value="">
                                                                                </div>
                                                                                <div class="form">
                                                                                        <h5>Повторите пароль</h5>
                                                                                        <input name="pass" class="search-field" type="password" placeholder="Подтверждение пароля" value="">
                                                                                </div>
                                                                                <div class="divider margin-top-0"></div>
                                                                                <div class="notification notice closeable margin-bottom-40">
                                                                                        <p><span>Что дальше?</span> После регистрации Вы можете добавлять заказы, видеть контакную информацию исполнителей. </p>
                                                                                </div>
                                                                                <!--<a href="register" class="button big margin-top-5">Зарегистрироваться<i class="fa fa-arrow-circle-right"></i></a>-->     
                                                                        <input type="submit" value="Зарегистрироваться">
                                                                        </form>
                                                                        </div>
                                                                        
                                                                        
                                                                        
 
                                                                </div>									

								</div>
						</div>
						
					</div>
			</div>
					
			





		</div>
	</div>

</div>



 
<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

<?php include("blocks/footer-out.php"); ?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="index-4.html#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>




</body>
</html>
