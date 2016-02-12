<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Заявки к заказу</title>
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
<?php include("blocks/header-cl.php"); 
//require("lib/db.php");
if(isset($_REQUEST['adid']))
{
   $adid=$_REQUEST['adid'];
   //$arr=SelectFromDBArray("SELECT * from applications where adid=$adid");
   $usarr=SelectFromDBArray("SELECT * from users INNER JOIN applications ON users.id=applications.clid");
   $one=SelectFirstFromDB("SELECT title from ads where id=$adid");
   //$arr=array_merge($arr, $usarr);
   //print_r($arr);
}
?>
<div class="clearfix"></div>
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2> <i class="fa fa-user-plus"> </i>  Заявки к заказу "<?if(isset($one['title']))echo $one['title'];?>"</h2>
		</div>

	</div>
</div>

<div class="container">
	<div class="sixteen columns">

		<p class="margin-bottom-25" style="float: left;"><strong>Пожалуйста, удалите заказ после выбора исполнителя.</strong></p>
		

	</div>
	<div class="sixteen columns">
		
		<!-- Application #1 -->
		<?foreach($usarr as $value){?>
        <div class="application">
			<div class="app-content">
				
				<!-- Name / Avatar -->
				<div class="info">
					<img src="images/avatar-placeholder.png" alt="">
					<span><a href="/performer-page.php?id= <?if(isset($value['id']))echo $value['id'];?>"><?if(isset($value['name']))echo $value['name'];?></a></span>
					<ul>
						<li><i class="fa fa-phone"></i><?if(isset($value['phone']))echo "+".$value['phone'];?></li>
						<li><i class="fa fa-envelope"></i> <?if(isset($value['email']))echo $value['email'];?></li>
					</ul>
				</div>
	

				<!-- Buttons -->
				<div class="buttons">
					
					<a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Показать сообщение</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<!--  Hidden Tabs -->
			<div class="app-tabs">

				<a href="#" class="close-tab button gray" style="display: none;"><i class="fa fa-close"></i></a>
				
	
			    <div class="app-tab-content opened" id="three-1" style="display: none;">
	

					<i>Сообщение:</i>
					<span><?if(isset($value['text']))echo $value['text'];?></span>
			    </div>

			</div>

			<!-- Footer -->
			<div class="app-footer">

		

				<ul>
					
					<li><i class="fa fa-calendar"></i><?if(isset($value['date']))echo $value['date'];?></li>
				</ul>
				<div class="clearfix"></div>

			</div>
		</div>
        <?}?>

		
			<!-- Footer -->
			<div class="app-footer">

				

				<ul>
					
					<li><i class="fa fa-calendar"></i> 01.01.2015</li>
				</ul>
				<div class="clearfix"></div>

			</div>
		</div>


	</div>

</div>



 
<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

<?php include("blocks/footer-out.php"); ?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

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