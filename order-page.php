<?session_start();?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Страница заказа</title>
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
 if(isset($_REQUEST['id']))
 { $id=$_REQUEST['id'];  
    $myrow=SelectFirstFromDB("SELECT  * FROM ads  CROSS JOIN categories ON ads.firstid = categories.id CROSS JOIN users ON ads.userid=users.id
                                WHERE ads.id =$id");

    if(!isset($_SESSION['userid'])){
                 $access=FALSE;?>
             <span>
                
                 Чтобы видеть контакты исполнителей, пожалуйста, авторизуйтесь!</span>
             <?}
             else{$access=TRUE;}
             ?>
<div class="clearfix"></div>
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span> <i class="fa fa-calendar"> </i> <?echo $myrow["date"]; ?></span>
			<h2><?echo $myrow["title"]; ?><span class="full-time"><?echo $myrow["first"]; ?></span> <span class="full-time">Категория</span></h2>
		</div>

		
	</div>
</div>
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<h4 class="margin-bottom-5"><?echo $myrow["description"]; ?></h4>
		<p class="margin-reset">
			The Food Service Specialist ensures outstanding customer service is provided to food customers and that all food offerings meet the required stock levels and presentation standards. Beginning your career as a Food Steward will give you a strong foundation in Speedway’s food segment that can make you a vital member of the front line team!
		</p>

		<br>
		<p>The <strong>Food Service Specialist</strong> will have responsibilities that include:</p>

		<ul class="list-1">
			<li>Executing the Food Service program, including preparing and presenting our wonderful food offerings
			to hungry customers on the go!
			</li>
			<li>Greeting customers in a friendly manner and suggestive selling and sampling items to help increase sales.</li>
			<li>Keeping our Store food area looking terrific and ready for our valued customers by managing product 
			inventory, stocking, cleaning, etc.</li>
			<li>We’re looking for associates who enjoy interacting with people and working in a fast-paced environment!</li>
		</ul>
		
		<br>

		<h4 class="margin-bottom-10">Job Requirment</h4>

		<ul class="list-1">
			<li>Excellent customer service skills, communication skills, and a happy, smiling attitude are essential.</li>
			<li>Must be available to work required shifts including weekends, evenings and holidays.</li>
			<li>Must be able to perform repeated bending, standing and reaching.</li>
			<li> Must be able to occasionally lift up to 50 pounds</li>
		</ul>

	</div>
	</div>


	<div class="five columns">

		<div class="widget">
			<h4>Дополнительная информация</h4>

			<div class="job-overview">
				
				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Местоположение:</strong>
							<span><?if($access==TRUE) echo $myrow["region"]; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-phone"></i>
						<div>
							<strong>Контактный номер заказчика:</strong>
							<span><?if($access==TRUE) echo $myrow["phone"]; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-envelope"></i>
						<div>
							<strong>E-mail заказчика:</strong>
							<span><?if($access==TRUE) echo $myrow["email"]; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-calculator"></i>
						<div>
							<strong>Объем работы:</strong>
							<span><? echo $myrow["workload"]; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-calendar-o"></i>
						<div>
							<strong>Сроки выполнения:</strong>
							<span><? echo $myrow["term"]; ?></span>
						</div>
					</li>
				</ul>

                <?
				    if(isset($_SESSION['userid'])){ ?>
                    <a href="#small-dialog2" class="popup-with-zoom-anim button">Оставить заявку</a>
               
				<div id="small-dialog2" class="zoom-anim-dialog apply-popup mfp-hide">
					<div class="small-dialog-headline">
						<h2>Оставить заявку к заказу</h2>
					</div>

					<div class="small-dialog-content">
						<form action="applications" method="post">
							<INPUT TYPE=hidden NAME="action" VALUE="appwrite">
							<textarea NAME="text" placeholder="Можете оставить сообщение к заявке"></textarea>
                            <INPUT TYPE=hidden NAME="adid" VALUE="<?echo $_REQUEST["id"];?>">
                            <INPUT TYPE=hidden NAME="clid" VALUE="<?echo $_SESSION["userid"];?>">
							
							<div class="clearfix"></div>


							<button class="send">Оставить заявку</button>
						</form>
					</div>
					
				</div>
               <?}
               else{?><span>Авторизуйтесь, чтобы оставить заявку к заказу</span> <?}
               ?>
               
			</div>

		</div>

	</div>



</div>
	



</div>



</div>

 
<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

<?php include("blocks/footer-out.php"); ?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="index-4.html#"></a></div>
<?}
else
{
    echo "<script>document.location.replace('/main');</script>";
}?>

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