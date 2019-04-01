
<?php
//a - Arregle el siguiente codigo
$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $v=>$valor) {
  echo $v . "\n";
}
echo "\n\n";
// duplico todos los elementos sin agregar nuevos
foreach ($b as $v) {
  $b = $v*2;
  var_dump($b);
}