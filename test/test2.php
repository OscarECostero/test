<?php

$ar=array(1,2,3);

function duplicar($ar){
    
    foreach($ar as $v){
       return $ar=$v*2;
        

        var_dump($ar);
    } 
    var_dump($ar);
}

var_dump($ar);