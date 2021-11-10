<?php

for($i=1;$i<=5;$i++)
{
	//space print
	for($j=4;$j>=$i;$j--)
	{
		echo "&nbsp;";
	}
	//star print
	for($k=1;$k<=$i;$k++)
	{
		echo "*";
	}
	//star print
	for($l=2;$l<=$i;$l++)
	{
		echo "*";
	}
	echo "</br>";
}
?>