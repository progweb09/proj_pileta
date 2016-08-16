<?php
include_once 'funciones.php';
if (isset($_POST['submit'])){
$anchoPileta=$_POST['ancho'];
$largoPileta=$_POST['largo'];
$alturaPileta=$_POST['profundidad'];

$volumen=calcularLitros($largoPileta,$alturaPileta,$anchoPileta);
echo "La capacidad total de la pileta es de: <span class='litros'>$volumen</span> lts!";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	
	
	<title>Document</title>
</head>
<body class="container-fluid">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Ancho: <br>
<input type="text" name="ancho"><br>
Largo: <br>
<input type="text" name="largo"><br>
Profundidad: <br>
<input type="text" name="profundidad">
<br>
<input type="submit" name="submit" value="calculo (Lts de Agua)" 
class="btn btn-primary" role="button">
<br>

</form>	
<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>