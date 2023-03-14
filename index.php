<?php
$mysqli = new mysqli("localhost", "root", "", "db_eshop");
if ($mysqli->connect_errno){
    echo "Fallo al conextar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
}

echo $mysqli->host_info . "\n";

?>
<HTML>
   <HEAD>
	<TITLE>Conexion a base de datos</TITLE>
   </HEAD>
   <BODY>
      <?php
	$query = "SELECT * FROM t_clientes;";
	$resultado = $mysqli->query($query);
	$resultado->data_seek(0);
            echo"<table style=border=1>";
            while ($fila = $resultado->fetch_assoc()) {
		echo"<tr>";
		echo"<td>";
		echo " id_cliente = " . $fila['id_cliente'] . "\n";
		echo"</td>";
		
		echo"<td>";
		echo " nombre = " . $fila['nombre'] . "\n";
		echo"</td>";
		
		echo"<td>";
		echo " apellidos = " . $fila['apellidos'] . "\n";
		echo"</td>";

		echo"<td>";
		echo " correo = " . $fila['correo'] . "\n";
		echo"</td>";

		echo"<td>";
		echo " telefono = " . $fila['telefono'] . "\n";
		echo"</td>";

		echo"</tr>";
		}
	echo"</table>";
?>
   </BODY> 
</HTML>