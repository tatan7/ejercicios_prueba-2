<?php 
$ancho = 3;
$alto = 3;
$cont = 0;
$caracterImprimir = "";
$color = "";
$tabla = "<table cellspacing='0' cellpadding='0'>";
for($a=1;$a<=$alto;$a++)
{
	$tabla .= "<tr>";
      	for($b=1;$b<=$ancho;$b++)
	{
		if($a == 1 || $a == $alto)
		{
			$caracterImprimir = "0";
			}
		else if($b == 1 || $b == $ancho)
		{
			$caracterImprimir = "0";
			}	
		else
		{
			$caracterImprimir = "1";
		}
		$tabla .= "<td style='padding:20px;background:".$color.";color:#fff'>".$caracterImprimir."</td>";
	}	
	$tabla .= "</tr>";
}
$tabla .= "</table>";
echo $tabla;
?>