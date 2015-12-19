<?
require_once(LIBPATH."db.php");
function maincatout()
{
	//массив названий классов категорий на главной странице.
	$i=0;
	$pictarr[0]="fa fa-line-chart"; $pictarr[1]="fa fa-wrench"; $pictarr[2]="fa fa-building-o"; $pictarr[3]="fa fa-graduation-cap"; $pictarr[4]="fa fa-medkit"; $pictarr[5]="fa fa-cutlery";
	$pictarr[6]="fa fa-globe";$pictarr[7]="fa fa-laptop"; $pictarr[8]="fa fa-medkit"; $pictarr[9]="fa fa-cutlery"; 
	
	$res=SelectFromDBArray("SELECT * from categories;");
	foreach ($pictarr as $value)
	{
		$res[$i]['catclass']= $value;
		$i++;
	}
	?><ul id="popular-categories"><?
	foreach($res as $value)
	{
		if($i!=0)
		{?>
			<li><a href="catsearch?id=<?echo $value['id']?>"><i class="<?echo $value['catclass']?>"></i><?echo $value['first']?></a></li>		
		<?
			$i--;
		}
		else return 0;
	}
	?></ul><?
}