<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hola Mundo</h1>
<h2>
<?php
// comentario en linea
/**
 * comentario en bloque
 */
# comentario de linea

$a=3;
$b=5; //si es la ultima linea no es obligatorio poner ;
$c=$a+$b;
//echo muestra en el html lo que escribamos
echo "El resultado de la suma es $a + $b  es " . $c; //se concatena con . o ,
$nombre="Juana";
$nombre.=" Díaz";
echo "<br>".$nombre;
echo "<br>".gettype($a);
echo "<br>".gettype($nombre);
const IVA = 21;
echo "<br>"."El IVA es " . IVA;
echo "<br>".M_PI;
echo "<br>".__LINE__;
/**
 * Variables generadas dinámicamente
 */

$m_en="Hello";
$m_es="Hola";
$m_it="Ciao";
//variable para definir el idioma que se va a usar
$idioma="it";
//variable con el nombre generado dinamicamente
$bienvenida="m_".$idioma;
//lo que mostrara de la variable
echo "<br>";
echo "¡".$$bienvenida."!";


/* CASO PRÁCTICO 1 */
$radio=10;
$longitud=2*M_PI*$radio;
$superficie=M_PI*$radio**2;
$volumen=4/3*M_PI*$radio**3;
echo "<br><h1>";
printf("%0.2f",$longitud);
echo "</h1>";

echo "<br><h2>";
printf("%0.2f",$superficie);
echo "</h2>";

echo "<br><h3>";
printf("%0.2f",$volumen);
echo "</h3>";

?>
</h2>
</body>
</html>
