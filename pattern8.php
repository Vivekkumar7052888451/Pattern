<?php	
for ($i=1; $i<=5; $i++) 	       
{ 	 
	for ($k=5; $k>$i; $k--)	 
	{	  
	//print one space
	echo "&nbsp;";	  
	}	
	for($j=1;$j<=$i;$j++)	  
	{	  	
	echo "*";	  
	}	  	
    echo "<br/>";	
} 

for ($i=2; $i<=5; $i++) 	       
{ 	 
	for ($k=2; $k<=$i; $k++)	 
	{	  
	//print one space
	echo "&nbsp;";	  
	}	
	for($j=5;$j>=$i;$j--)	  
	{	  	
	echo "*";	  
	}	  	
    echo "<br/>";	
}
?>