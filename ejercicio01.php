<?php
$arreglo = [
'keyStr1' => 'lado',
0 => 'ledo',

'keyStr2' => 'lido',
1 => 'lodo',
2 => 'ludo'
];

foreach ($arreglo as $value) {
    echo $value .', ';
  };
  echo "<br>Descirlo al revés lo dudo.<br>";
  $arregloInverso=array_reverse($arreglo);
  foreach ($arregloInverso as $value) {
    echo "$value, ";
};
echo "<br>¡Qué trabajo me ha costado!<br>";
?>