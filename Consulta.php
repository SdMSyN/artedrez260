<?php
$enlace = mysqli_connect("localhost", "root", "", "artedrez");
if (!$enlace) {
    //echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    //echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    //echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
mysqli_close($enlace);

$nombre_completo = $_POST['nombre_completo'];
$consulta = "SELECT name FROM `federacion`"; 
$resultado=mysql_query($consulta); 

echo "Nombre: ".mysql_result($resultado, 0, "nombre")."<br>"; 

?>
