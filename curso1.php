<?php 
echo "esto es una prueba\n";
while ( $x<= 10) {
	$total*=$x;
	$x++;
	echo $x;
	# code...
}
$dia= array("domingo", "lunes","martes","miercoles","jueves","viernes","sabado");
$numdia=date("w"); //mostrar la fecha 
echo "hoy es $dia[$numdia] .<br>\n";
$numelementos=count($dia);
echo "la semana tiene $numelementos dias. \n";
 ?>