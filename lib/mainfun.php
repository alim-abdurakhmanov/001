<?
function catoutput($catarr, $value)
{
echo $catarr[$value]['first'];
?><br><?	
	echo $catarr[$value]['sec'];
	echo $catarr[$value+1]['sec'];
?><br><?
	echo $catarr[$value]['third'];
	echo $catarr[$value+1]['third'];
	echo $catarr[$value+2]['third'];
	echo $catarr[$value+3]['third'];
  ?><br><?
  ?><br><?
}
