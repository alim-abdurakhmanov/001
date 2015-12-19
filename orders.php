<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Заказы</title>
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
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<h2>Заказы</h2>
			<span>Чтобы видеть контакты заказов и оставлять к ним заявки, зарегистрируйтесь, пожалуйста, как исполнитель!</span>
		</div>

		<!-- <div class="six columns">
			<a href="add-order.php" class="button">Разместить свой заказ!</a>
		</div> -->

	</div>
</div>
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		

		<ul class="job-list full">

			<li><a href="order-page.php">
				
				<div class="job-list-content">
					<h4>Название заказа 1 <span class="full-time">Категория</span></h4>
					<div class="job-icons">
						
						<span><i class="fa fa-map-marker"></i> Регион</span>
						<span><i class="fa fa-calendar"></i> Дата добавления</span>
						
					</div>
					<p>Описание заказа 1.</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="order-page.php">
				
				<div class="job-list-content">
					<h4>Название заказа 2 <span class="full-time">Категория</span></h4>
					<div class="job-icons">
						
						<span><i class="fa fa-map-marker"></i> Регион</span>
						<span><i class="fa fa-calendar"></i> Дата добавления</span>
						
					</div>
					<p>Описание заказа 2.</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="order-page.php">
			
				<div class="job-list-content">
					<h4>Название заказа 3 <span class="full-time">Категория</span></h4>
					<div class="job-icons">
						
						<span><i class="fa fa-map-marker"></i> Регион</span>
						<span><i class="fa fa-calendar"></i> Дата добавления</span>
						
					</div>
					<p>Описание заказа 3.</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="order-page.php">
				
				<div class="job-list-content">
					<h4>Название заказа 4 <span class="full-time">Категория</span></h4>
					<div class="job-icons">
						
						<span><i class="fa fa-map-marker"></i> Регион</span>
						<span><i class="fa fa-calendar"></i> Дата добавления</span>
						
					</div>
					<p>Описание заказа 4.</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="order-page.php">
				
				<div class="job-list-content">
					<h4>Название заказа 5 <span class="full-time">Категория</span></h4>
					<div class="job-icons">
						
						<span><i class="fa fa-map-marker"></i> Регион</span>
						<span><i class="fa fa-calendar"></i> Дата добавления</span>
						
					</div>
					<p>Описание заказа 5.</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="blank">...</li>
					<li><a href="#">22</a></li>
				</ul>
			</nav>

			<nav class="pagination-next-prev">
				<ul>
					<li><a href="#" class="prev">Предыдущая</a></li>
					<li><a href="#" class="next">Следующая</a></li>
				</ul>
			</nav>
		</div>

	</div>
	</div>


	
	<div class="five columns">

		<form action="#" method="post">

		<div class="widget">
			<h4>Тип заказов</h4>

		
			<select data-placeholder="Выберите тип заказа" class="chosen-select" multiple="" style="display: none;">
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


		<div class="widget" style="margin-top:-20px">
			<h4>Местоположение заказов</h4>

			
			<select data-placeholder="Выберите регоин" class="chosen-select-no-single" style="display: none;">
				<option  value="recent">Тут база регионов</option>

			
			</select>

			
				<br/><br/>
				<button class="button">Отсортировать</button>

			</form>
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