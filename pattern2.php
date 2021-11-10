
<?php
$n=5;
$no=$n;

for($i=1;$i<=$no;$i++)
{
	
	//space print
	for($j=1;$j<=$n-1;$j++)
	{
		echo "&nbsp;";
	}
	$n--;
	//star print
	for($k=1;$k<=$i;$k++)
	{
		echo "*";
	}
	echo "</br>";
}
?>
