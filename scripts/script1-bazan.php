<?php
/**
* Función mostrarTexto
* Esta función imprime en pantalla el texto que se pasa como parámetro 
* @author Alberto Jesús Bazán Benítez <abazanbenitez@gmail.com> 
* @version 3.0
* @param String $texto Texto que se pasa como parámetro
* {@internal Muestra solo el texto que el desarrollador pasa}
* @return String Devuelve el texto a mostrar
*/
function mostrarTexto($texto) {
	echo "<strong>El texto a mostrar es el siguiente: </strong>";
	echo $texto;
}
/**
* Función suma
* Esta función suma dos números pasados como parámetro
* @author Alberto Jesús Bazán Benítez <abazanbenitez@gmail.com> 
* @version 3.0
* @param integer $num1 Primer número que se pasa como parámetro
* @param integer $num2 Segundo número que se pasa como parámetro
* @return integer resultado de la suma de los dos números
*/
function suma($num1, $num2) {
	return $num1 + $num2;
}?>
