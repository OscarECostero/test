<?php
 //    Plantee la idea de juego truco donde dado una mano
 //    de 3 cartas te diga cuantos tantos tiene para el envido
 //    (Vamos a asumir que todas las cartas son del mismo palo, por ej oro)
 //
 //    ej:
 //       $mano = array(4, 5, 10);    // 4 de oro, 5 de oro, 10 de oro
 //                                   // tiene 29
 //
 //       $mano = array(1, 11, 12);  // tiene 1
 //
 //       $mano = array(6, 7, 5);    // tiene 33














function factorial($number){
    if($number <= 1){
        return 1;
    }else{
        return $number * factorial($number - 1);
    }
}
 echo factorial(10);




 ?>