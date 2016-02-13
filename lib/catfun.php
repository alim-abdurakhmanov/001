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
			<li><a href="/orders?category=<?echo $value['id']?>"><i class="<?echo $value['catclass']?>"></i><?echo $value['first']?></a></li>		
		<?
			$i--;
		}
		else return 0;
	}
	?></ul><?
}

//<br /><b>Notice</b>:  Undefined index: term in <b>D:\OpenServer\domains\buildex-des.ru\add-order.php</b> on line <b>85</b><br />
function regionsout($regid)
{
   $res=SelectFromDBArray("SELECT * from  regions");
    foreach($res as $value)
    {        if($regid==$value['id'])
             {?>
                 <option selected value="<?echo $value['id'];?>"><?echo $value['region'];?></option>
             <?}
             else
             {?>					
                <option value="<?echo $value['id'];?>"><?echo $value['region'];?></option>
           <?}
    }
}  
  
  function listcatout($regid)
{
   $res=SelectFromDBArray("SELECT * from categories");
   
			foreach($res as $value)
            {        
             if($regid==$value['id'])
                {?>
                 <option selected value="<?echo $value['id'];?>"><?echo $value['first'];?></option>
            <?}
             else
             {?>					
                <option value="<?echo $value['id'];?>"><?echo $value['first'];?></option>
           <?}
             }
    
}  