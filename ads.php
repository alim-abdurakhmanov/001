<?  
	$title='';
	if(isset($news)) $title='Объявления';
	if(isset($adsId)) $title=$adsId['name'];
	if(auth_getRole(auth_getUserId())=='admin')
	{
		$access=TRUE;
	}
	if(!isset ($NoShowHeaderAndFooter))
	?>
<link href="css/style.css" rel="stylesheet">

<? 
if(isset($ads))
{ 
		$catarr=SelectFromDBArray("SELECT * from categ");
		include(TMPALATEPATH.'searchform.php');	
	?>
<h2>Объявления</h2>
<div id="ads-box">
	<div id="ads-list">	
<?	foreach($ads as $nw)  { ?>
<div class="page-container">
	<? //print_r(strtotime($nw['time_end'])); ?>
	<div <?if(strtotime($nw['time_end'])>=time()){ ?> class="vip-ads-art"<?} else{?> class="ads-art" <?}?>>
		<img align="left" vspace="7" hspace="7" src="<? if($nw['photo']!=FALSE){echo UPDIR."min_".$nw['photo'];}
		 else{echo UPDIR."defimage.jpg";} ?>" />
		<h2><a href="/ads/<? if($nw['link']) echo $nw['link']; ?>"><?   echo $nw['name']; ?></a></h2>
		<div class="ads-description">
			<? $ad=mb_substr($nw['text'],0,180,'UTF-8')."..."; echo $ad; ?> 
		</div>
		<?if(isset($access)&&$access==TRUE)
		{
			include(TMPALATEPATH.'adsredbuttons.php');
		}?>
	</div>
</div>	
<?}?>
</div>
	<div id="ads-pages">
		<?
		$pagesname="";
		 if( isset($_SERVER['REQUEST_URI']))
		   if  (mb_strpos( $_SERVER['REQUEST_URI'],'search.php') !== false)
		   $pagesname="/search.php?str=".$_REQUEST['str']."&page=";
		 if($pagesname=="") $pagesname="/adspage-";//   search.php?str=+права&catid=[]&page=[]
		 link_bar($page, $pages_count, $pagesname) ?>
	</div>
</div>
<? } ?>
<? 
if(isset($adsId))
{
?>
<div class="page-container">
	<div class="ads-art">
		<a class="single_image"  href="<?if($adsId['photo']!=FALSE){echo UPDIR.$adsId['photo'];}?>">
		<img align="left" vspace="7" hspace="7" src="<? if($adsId['photo']!=FALSE){echo UPDIR."min_".$adsId['photo'];}?>" /></a>
		
		<h2><?   echo $adsId['name']; ?></h2>
		<div class="ads-description">
			<? echo $adsId['text'] ?> 
		</div>
		<h3>Контактная информация:</h3>
		<div class="ads-description">
			<b>e-mail: </b><? $email=mb_substr($adsId['email'],0,180,'UTF-8'); echo $email; ?> 
			<br>
			<b>телефон: </b><? $phone=mb_substr($adsId['phone'],0,180,'UTF-8'); echo "+".$phone; ?> 
		</div>
		Категория:<a href="/categories-id=<?echo $adsId['catid'];?>"><?echo $catname;?></a> 
	</div>
</div>	
<? 
}
if(!isset ($NoShowHeaderAndFooter))
   include(TMPALATEPATH.'footer.php'); 

