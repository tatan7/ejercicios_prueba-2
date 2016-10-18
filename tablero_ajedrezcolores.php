<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>tablero ajedrez colores</title>
		<head>
	<body>
            <form method="post" name="suma" action="">
                ingrese el numero de las filas:<input type="text" name="resultado1"<br>
                ingrese el numero de las columnas:<input type="text" name="resultado2"<br>
                <input type="submit" value="enviar">
                </form>
<?php 
$fila ="resultado1";
$columna="resultado2";
$j=0;
$color=true;
echo "<table>";
$fila = $_POST["resultado1"];
$columna = $_POST["resultado2"];
for($x=1;$x<=$fila;$x++){
echo "<tr>";
for($y=1;$y<=$columna;$y++){
	if($color){
            $color=false;
	$j++;
	echo"<td style = \"background:blue\">".$j."</td>";}
else{
		$color=true;
		$j++;
		echo "<td style = \"background:orange\">".$j."</td>";
	}
}
echo"</tr>";
}
echo"</table>";
