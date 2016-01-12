<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Добавление заказа</title>
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
<?php include("blocks/header-out.php"); ?>
<div class="clearfix"></div>
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus"></i> Добавление заказа</h2>
		</div>

	</div>
</div>
<div class="container">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<div class="notification notice closeable margin-bottom-40">
				<p><span>Что дальше?</span> После добавления заказа исполнители будут оставлять заявки, и Вы сможете видеть их у себя в личном кабинете.</p>
			</div>

			<div class="form">
				<h5>Название заказа</h5>
				<input type="text" placeholder="Введите название">
			</div>
			<div class="form">
				<h5>Регион заказа</h5>
				<input class="search-field" type="text" placeholder="Введите название населенного пункта" value="">
			</div>
			<div class="form">
				<h5>Контактный номер телефона</h5>
				<input type="text" placeholder="+7(xxx)-xxx-xx-xx">
			</div>
			<div class="form">
				<div class="select">
					<h5>Тип заказа</h5>
					<select data-placeholder="Выберите из списка" class="chosen-select" multiple="" style="display: none;">
						<option value="1">Категория 1</option>
						<option value="2">Категория 2</option>
						<option value="3">Категория 3</option>
						<option value="4">Категория 4</option>
						<option value="5">Категория 5</option>
						<option value="6">Категория 6</option>
						<option value="7">Категория 7</option>
					</select>
					<div class="chosen-container chosen-container-multi" style="width: 100%;" title=""><!-- <ul class="chosen-choices"><li class="search-field"><input type="text" value="Choose Categories" class="default" autocomplete="off" style="width: 149px;"></li></ul> --><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
				</div>
			</div>
			<div class="form">
				<h5>Срок выполнения заказа</h5>
				<input class="search-field" type="text" placeholder="С ... по ..." value="">
			</div>
			<div class="form">
				<h5>Объем работы</h5>
				<input class="search-field" type="password" placeholder="Введите объем работы" value="">
			</div>
			<div class="form">
				<h5>Описание заказа</h5>
				<textarea  placeholder="Напишите все подробности заказа" value="" cols="40" rows="10"></textarea>
			</div>
			<div class="divider margin-top-0"></div>
			<?if(isset($_SESSION['userid']) && $_SESSION['type']=="perf"){?>
			     <a href="#" class="button big margin-top-5">Добавить заказ<i class="fa fa-arrow-circle-right"></i></a>
		    <?}
            else
            {?>
                <a href="#small-dialog" class="popup-with-zoom-anim button">Авторизуйтесь</a> как заказчик чтобы добавить заказ
            <?}
            ?>
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