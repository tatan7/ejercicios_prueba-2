<?php 
echo "comienzo de sucession de fibonacci <p>"; 
$valor1 = 1; 
$valor2 = 1; 
echo $valor1."<br>"; 
while ($valor2 < 100) { 
echo $valor2."<br>"; 
$valor2=$valor2+$valor1; 
$valor1=$valor2-$valor1; 
} 
echo "<p>terminacion de la serie de fibonacci"; 
?> 