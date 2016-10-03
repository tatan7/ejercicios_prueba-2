<?php 
 
$CONTADOR = 0;
for($NUMERO=1;$NUMERO<=8;$NUMERO++)
{
	for($RESULTADO=1;$RESULTADO<=8;$RESULTADO++)
	{
		if(($CONTADOR%2) == 0)
		{
			echo "  1  ";
		}
		else
		{
			echo "  0  ";
		}
		$CONTADOR++;
	}
	$CONTADOR++;	
	echo "<br>";
}
