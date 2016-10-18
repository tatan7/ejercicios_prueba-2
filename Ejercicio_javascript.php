<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>convertidor</title>
		</head>
		<body bgcolor = "#008EF4">
		<form name = "convertidor">
		<h2> CONTADOR <br> DE BILLETES</h2>
		<br> CUANTOS BILLETES TENGO: <input type="text" name="pesos">
		<hr>
		<br>
		<br> <input type = "button" value = "CONVERTIR" onclick="calcular ();">
		</form>
		<scrip type="text/javascript">
		<script type="text/javascript">
			function calcular (){
			var pes = (document.convertidor.pesos.value)*1;
			if (pes == 0) {alert ("No ha llenado el espacio de pesos ingrese un numero por favor ")}
			var tot = pes / 16; 
			tot = tot.totfixed (2);
			document .convertidor.dolar.value = tot;
		}		
		</script>
		<body>

         <?php 