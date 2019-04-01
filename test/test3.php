<?php




//a - Crear una funcion que dado un arreglo/array duplica todos los valores
$ar = array();

function ej4_a($ar) {
    $ar2=[];
    foreach($ar as $v){
        $ar2[]=$v*2;
    }
}
echo 
var_dump($ar);
var_dump($ar2);


ej4_a($ar); // tiene que modificar todos los valores y duplicarlos
//b - Crea una funcion que dado un arreglo/array te devuelve un nuevo arreglo
//    con los valores duplicados pero no modifica el original (debe crear un
//    nuevo arreglo)
//c - De un ejemplo de función recursiva*/
