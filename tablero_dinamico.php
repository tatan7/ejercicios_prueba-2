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
                $valor1 = "resultado1";
                $valor2 = "resultado2";
                $caract = "";
                $numero = "0";
                 print ("<TABLE BORDER=2>");
                   $valor1 = $_POST["resultado1"];
                   $valor2 = $_POST["resultado2"];
                    for ($i=1;$i<=$valor1;$i++)
                    {
                         print("<tr>");
                        for($j=1;$j<=$valor2;$j++) 
                            {
                         print("<td>".$numero."</td>");
                               
                                     if($i == 1 || $i == $valor1)
                                        {
                                        }
                                    else 
                                    if($j == 1 || $j == $valor2)
                                        {
                                      $caract = "0";
					}	
                                   
                                    else
                                      
                                           {
	
                                    $numero = "1";
                                     }
                            }
                     }
                        print("</table>");
                ?>
            
	
	</body>
</html>