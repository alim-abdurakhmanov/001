<?session_start();?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Страница исполнителя</title>
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
 include("blocks/header-out.php");
 if(isset($_REQUEST['id']))
 {  
    $id=$_REQUEST['id'];  
    $myrow=SelectFirstFromDB("SELECT * FROM users CROSS JOIN categories ON users.firstid = categories.id
                                WHERE users.id =$id");

    if(!isset($_SESSION['userid'])){
                 $access=FALSE;?>
             <span>
                
                 Чтобы видеть контакты исполнителей, пожалуйста, авторизуйтесь!</span>
             <?}
             else{$access=TRUE;}
             ?>
<div class="clearfix"></div>
<div id="titlebar" class="resume">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">
				<img src="images/avatar-placeholder.png" alt="">
				<div class="resumes-list-content">
					
                    
                    <h4><?echo $myrow["name"]; ?><span><?echo $myrow["busy"]; ?></span></h4>
					<span class="icons"><i class="fa fa-map-marker"></i><?echo $myrow["region"]; ?></span>
					<span class="icons"><i class="fa fa-user"></i><?if($myrow["whois"]=="FL"){echo "Юридическое лицо";} else{echo "Физическое лицо";}?></span>
					<span class="icons"><a href="#"><i class="fa fa-link"></i> Сайт</a></span>
					<span class="icons"><a href="mailto:john.doe@example.com"><i class="fa fa-envelope"></i><?if($access==TRUE){echo "+".$myrow["email"];}?></a></span>
					<span class="icons"><i class="fa fa-phone"></i><?if($access==TRUE){echo "+".$myrow["phone"];}?></span>
					<div class="skills">
						<span><?echo $myrow["first"]; ?></span>
						<span>Вып. работа</span>
						<span>Вып. работа</span>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="six columns">
		<?if($access==TRUE){?>	
            <div class="two-buttons">

				<a href="#small-dialog1" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Отправить сообщение</a>

				<div id="small-dialog1" class="zoom-anim-dialog apply-popup mfp-hide">
					<div class="small-dialog-headline">
						<h2>Отправить сообщение John Doe</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get">
							<input type="text" placeholder="Ваше имя" value="">
							<input type="text" placeholder="Email" value="">
							<textarea placeholder="Сообщение"></textarea>

							<button class="send">Отправить</button>
						</form>
					</div>
					
				</div>
			<?}?>


			</div>
		</div>

	</div>
</div>
<div class="container">

	

		<h3 class="margin-bottom-15">О исполнителе</h3>

		<p class="margin-reset">
			The Food Service Specialist ensures outstanding customer service is provided to food customers and that all food offerings meet the required stock levels and presentation standards. Beginning your career as a Food Steward will give you a strong foundation in Speedway’s food segment that can make you a vital member of the front line team!
		</p>

		<br>

		<p>The <strong>Food Service Specialist</strong> will have responsibilities that include:</p>

		<ul class="list-1">
			<li>Excellent customer service skills, communication skills, and a happy, smiling attitude are essential.</li>
			<li>Must be available to work required shifts including weekends, evenings and holidays.</li>
			<li>Must be able to perform repeated bending, standing and reaching.</li>
			<li>Must be able to occasionally lift up to 50 pounds</li>
		</ul>

	</div>
	



</div>
<?}
else
{
    echo "<script>document.location.replace('/main');</script>";
}?>


</div>

 
<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

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