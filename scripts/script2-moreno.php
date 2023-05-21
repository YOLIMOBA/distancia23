<?php
/**
 * Esto es un ejemplo de documentación de PHP
 * @author Yolanda
 * @version 1.0.1
 *
 */


/**
 * Esta función devuelve un saludo con el nombre que le
 * enviamos en la llamada
 * @param string $nombre es el nombre de la persona a la que saludamos
 * @return string Saludo a la persona solicitada
 *
 */
function saludo($nombre)
{
        echo "Hola ".$nombre;
}
echo "Ejemplo de funciones en PHP</br>";
saluda ("Yolanda");
echo "<br/> La diferencia entre 25 y 20 es :".resta(25,20);
echo "<br/>Hasta pronto!!<br/>";
?>
