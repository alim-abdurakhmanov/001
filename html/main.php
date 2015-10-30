<link href="/css/main.css" rel="stylesheet">
<a href="/orders">Заказы</a>
<a href="/performers">Исполнители</a>
<br>Категории</br>
<?
$i=0;
while($i!=3){
	catoutput($catarr, $i);
$i++;
}
?>