<?php
require_once("../conexion.php");

$sistema=utf8_decode($_POST['sistema']);
$hostname=utf8_decode($_POST['hostname']);
$ip=utf8_decode($_POST['ip']);
$usuario=utf8_decode($_POST['usuario']);
$contrasenia=utf8_decode($_POST['contrasenia']);
$udn=utf8_decode($_POST['udn']);





// date_default_timezone_set('America/Cancun');
// $fecha = new DateTime('NOW');
// echo $fecha->format('Y-m-d H:i:s');


$inserta_datos ="INSERT INTO servidores (idServidores, sistema, hostname, ip, usuario, contrasena, id_udn) 
					VALUES(NULL, '$sistema', '$hostname', '$ip', '$usuario', '$contrasenia', 1);";


$resultado =mysqli_query($conexion,$inserta_datos);

if ($resultado) {
	echo "<script>
	alert('Registro exitoso.');
	location.href='../tb_servidores.php'
</script>";
}

else {
	echo "<script>
	alert('¡No se pudo agregar!');
	location.href='javascript:history.back()'
</script>";
}
?>