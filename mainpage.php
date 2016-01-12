<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Главная</title>
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
<?php 
include_once("blocks/header-out.php");
require_once(LIBPATH."catfun.php"); 
if(!isset($_SESSION['userid'])){//Главная страница для незарегистрированного пользователя
?>

<div class="clearfix"></div>
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>

			<!-- Slide 1 -->
			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">
				<img src="images/slide.jpg" alt="">

				<div class="caption title sfb" data-x="center" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>Строительная биржа Buildex.su</h2>
				</div>

				<div class="caption text align-center sfb" data-x="center" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>Buildex создан для того, чтобы блабла блабла блабла <br> блабла блабла блабла блабла блабла блабла.</p>
				</div>

				<div class="caption sfb" data-x="center" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
					<a href="registration#tab1" class="slider-button">Я исполнитель</a>
					<a href="registration#tab1" class="slider-button">Я заказчик</a>
				</div>
			</li>

		</ul>
	</div>
</div>
<?}
else{
	//Главная зарегистрированного пользователя	?>
		
<?}?>

<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Виды работ</h3>
		
		<?
		maincatout();//ВЫВОД КАТЕГОРИЙ
		/*<ul id="popular-categories">
            
			<li><a href="#"><i class="fa fa-line-chart"></i> Категория 1</a></li>
			<li><a href="#"><i class="fa fa-wrench"></i> Категория 2</a></li>
			<li><a href="#"><i class="fa fa-building-o"></i> Категория 3</a></li>
			<li><a href="#"><i class="fa fa-graduation-cap"></i> Категория 4</a></li>
			<li><a href="#"><i class="fa fa-medkit"></i> Категория 5</a></li>
			<li><a href="#"><i class="fa fa-cutlery"></i> Категория 6</a></li>
			<li><a href="#"><i class="fa fa-globe"></i> Категория 7</a></li>
			<li><a href="#"><i class="fa fa-laptop"></i> Категория 8</a></li>
			<li><a href="#"><i class="fa fa-medkit"></i> Категория 9</a></li>
			<li><a href="#"><i class="fa fa-cutlery"></i> Категория 10</a></li>
			<li><a href="#"><i class="fa fa-globe"></i> Категория 11</a></li>
			<li><a href="#"><i class="fa fa-laptop"></i> Категория 12</a></li>
		</ul>*/?>


		<div class="clearfix"></div>
		
		<div class="margin-bottom-50"></div>
	</div>
</div>
 
<!-- Footer
================================================== -->
<?php include("blocks/footer-out.php"); ?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="index.php#"></a></div>

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