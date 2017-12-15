<?php
	$conexion = mysqli_connect('SERVIDOR-PC\SQLEXPRESSOS','omnivent','omnitrx0408','omnivent');
	$respuesta = mysql_query($conexion, "SELECT * from dbo.PDV_LISTA_PRECIO");
	$fila = mysqli_fetch_row($respuesta);
	echo "Id de la Primer lista de precios " . $fila[0]
?>