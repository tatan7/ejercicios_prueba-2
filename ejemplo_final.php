<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>tablero dinamico</title>
		<head>
	<body>
            <form method="post" name="suma" action="">
                ingrese el numero de las filas:<input type="text" name="resultado1"<br>
                ingrese el numero de las columnas:<input type="text" name="resultado2"<br>
                <input type="submit" value="enviar">
                </form>
<?php 
$ancho = "resultado1";
$alto = "resultado2";
$cont = 0;
$caracterImprimir = "";
$tabla = "<table cellspacing='0' cellpadding='0'>";
$ancho = $_POST["resultado1"];
$alto = $_POST["resultado2"];
for($a=1;$a<=$ancho;$a++)
{
	$tabla .= "<tr>";
	for($b=1;$b<=$alto;$b++)
	{
		$tabla .= "<tr>";
		for($b=1;$b<=$alto;$b++)
		{

	
		if($a == 1 || $a == $ancho)
		{
			$caracterImprimir = "0";
			$color = "green";
		}
		else if($b == 1 || $b == $alto)
		{
			$caracterImprimir = "0";
			$color = "green";
		}	
		else
		{
			$color = "blue";
			$caracterImprimir = "1";
		}
		$tabla .= "<td style='padding:20px;background:".$color.";color:#fff'>".$caracterImprimir."</td>";
		}
			$tabla .= "<tr>";
	}	
	$tabla .= "</tr>";
}
$tabla .= "</table>";
echo $tabla;
?>
	
	</body>
</html>