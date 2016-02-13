<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head> 
<meta charset="utf-8">
<title>Исполнители</title>
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
    include(LIBPATH."perfpageoutput.php");?>
<div class="clearfix"></div>
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<h2>Исполнители</h2>
			 <?if(!isset($_SESSION['type'])){
                 $access=FALSE;?>
             <span>Чтобы видеть контакты исполнителей, пожалуйста, авторизуйтесь!</span>
             <?}
             else{$access=TRUE;}
             ?>
		</div>

		<!-- <div class="six columns">
			<a href="add-order.php" class="button">Разместить свой заказ!</a>
		</div> -->

	</div>
</div>
<div class="container">
	
	<div class="eleven columns">
	<div class="padding-right">
		
		<ul class="resumes-list">

	<?for ($i = 0; $i < $n; $i++)
    {
        $myrow = mysql_fetch_array($r);?>
            <li><a href="performer-page.php?id=<?echo $myrow["id"];?>">
				<img src="images/avatar-placeholder.png" alt="">
				<div class="resumes-list-content">
					<h4><?echo $myrow["name"]; ?><span><?echo $myrow["busy"];?></span></h4>
					<span><i class="fa fa-map-marker"></i><?echo $myrow["region"];?></span>
					<span><i class="fa fa-user"></i><?if($myrow["whois"]=="FL"){echo "Юридическое лицо";} else{echo "Физическое лицо";}?></span>
					<p><?echo $myrow["description"];?>.</p>

					<div class="skills">
						<span><?echo $myrow["first"];?></span>
						<span>Вып. работа</span>
						<span>Вып. работа</span>
					</div>
					<div class="clearfix"></div>

				</div>
				</a>
				<div class="clearfix"></div>
			</li>
    <?}?>	
		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
                    <? if ($str-1 > 0){?><li><a href="performers?str=<?echo $str-2;?>"><?echo $str-1;?></a></li><?}?>
                    <? if ($str > 0){?><li><a href="performers?str=<?echo $str-1;?>"><?echo $str;?></a></li><?}?>
                    <li><a href="performers?str=<?echo $str;?>" class="current-page"><?echo $str+1;?></a></li>
					<?if($start + 5 < $rec){?><li><a href="performers?str=<?echo $str+1;?>"><?echo $str+2;?></a></li><?}?>
                    <?if($start + 10 < $rec){?><li><a href="performers?str=<?echo $str+2;?>"><?echo $str+3;?></a></li><?}?>
				</ul>
			</nav>

			<nav class="pagination-next-prev">
				<ul>
			<?   
                if ($str > 0)
                 {
                    $p = $str - 1;
                     if ($str-2 > 0){?><li><a class="prev" href="performers?str=<?echo $str-3;?>">В начало</a></li><?}
                     ?><li><a href=performers?str=<?echo $p;?> class="prev">Предыдущая</a></li><?
                  
                 }
		   
                $str++;  // увеличиваем переменную $str на единицу;
                // выводим ссылку на следующие пять записей, если она есть, 
                // то есть число записей, которые нужно вывести,
                 // и смещение не превышает общего числа записей
		   
                 if($start + 5 < $rec){
                 ?><li><a href=performers?str=<?echo $str;?> class="next">Следующая</a></li><?}?>

				</ul>
			</nav>
		</div>
 
	</div>
	</div>


	
	<div class="five columns">

		<form action="performers" method="post">

		<div class="widget">
			<h4>Выполняемые работы исполнителей</h4>

		
			<select data-placeholder="Выберите тип заказа"  multiple name="category" class="chosen-select" style="display: none;">
						  <?$arr=SelectFromDBArray("SELECT * from categories");
    						foreach($arr as $value)
							{?>
								<option value="<?echo $value['id']?>"><?echo $value['first']?></option>
						  <?}?>

					</select>
					<div class="chosen-container chosen-container-multi" style="width: 100%;" title=""><!-- <ul class="chosen-choices"><li class="search-field"><input type="text" value="Choose Categories" class="default" autocomplete="off" style="width: 149px;"></li></ul> --><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>

		</div>


		<div class="widget" style="margin-top:-20px">
			<h4>Местоположение исполнителей</h4>

			
			<select data-placeholder="Выберите регион"  multiple name="region" class="chosen-select-no-single" style="display: none;">
				 <?$arr=SelectFromDBArray("SELECT * from regions");
    						foreach($arr as $value)
							{?>
								<option value="<?echo $value['id'];?>"><?echo $value['region'];?></option>
						  <?}?>
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