<?php

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);
echo 'Los tres números menores son:';
obtener($valores);
echo '<br/>';
rsort($valores);
echo 'Los tres números mayores son:';
obtener($valores);
echo '<br/>';
function obtener($var){
for ($i=0; $i < 3; $i++) {
echo " $var[$i], ";
}
}
?>