<?php
function calcularLitros ($ancho,$largo,$altura)
{
	$cantidadLitros=$ancho*$altura*$largo*1000;
	return $cantidadLitros;
}
?>