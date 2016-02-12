<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Мои заказы</title>
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
    include("mod/myorders.php"); ?>
<div class="clearfix"></div>
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-edit"></i> Управление заказами</h2>
		</div>

	</div>
</div>

<div class="container">
	
	<div class="sixteen columns">

		<p class="margin-bottom-25">Ниже приведен список созданных Вами ранее заказов. <br/>Вы можете их изменять и удалять, просматривать заявки исполнителей. <br/>Заказ автоматически удаляется через 30 дней после добавления, если его не продлить. </p>

		<table class="manage-table responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i>Название заказа</th>
				<th><i class="fa fa-check-square-o"></i> Просмотры</th>
				<th><i class="fa fa-calendar"></i> Дата</th>
				<th><i class="fa fa-map-marker"></i> Местоположение</th>
				<th><i class="fa fa-user"></i> Заявки</th>
				<th></th>
			</tr>
					
			<!-- Item #1 -->
			<?
            if(isset($arr))
            {
                foreach($arr as $value){?>
            <tr>
				<td class="title"><a href="/order-page.php?id=<?if(isset($value['id'])){echo $value['id'];}?>"><?if(isset($value['title'])){echo $value['title'];}?></a></td>
				<td class="centered"></td>
				<td><?if(isset($value['date'])){echo $value['date'];}?></td>
				<td><?if(isset($value['region'])){echo $value['region'];}?></td>
				<td class="centered"><a href="myapplications?adid=<?if(isset($value['id'])){echo $value['id'];}?>" class="button">Показать (<?if(isset($value['applications'])){echo $value['applications'];}?>)</a></td>
                <td class="centered">-</td>
				<td class="action">
					<a href="#"><i class="fa  fa-check "></i> Продлить</a>
					<a href="add-order?orderid=<?if(isset($value['id'])){echo $value['id'];}?>"><i class="fa fa-pencil"></i> Редактировать</a>				
					<a href="delete?action=orderdel&orderid=<?if(isset($value['id'])){echo $value['id'];}?>" class="delete"><i class="fa fa-remove"></i> Удалить</a>
				</td>
			</tr>
            <?    }
            }?>

		</table>


		<br>
		<a href="add-order" class="button">Добавить заказ</a>

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