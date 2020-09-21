<?php

$paises = [
'Colombia' => ['Bogota' , 'Cartagena' , 'Medellin'],
'Brasil' => ['Rio Janeiro', 'Sao Paulo', 'Manaos'],
'Panamá' => ['Panamá', 'Colón', 'Chitré'],
'Venezuela' => ['Caracas', 'Maracaibo', 'Valencia'],
'Ecuador' => ['Quito', 'Guayaquil', 'Cuenca']
];
foreach($paises as $ciudades => $nomciu){
echo "<br/><strong>$ciudades: </strong>" . implode(" ",$nomciu). '';
echo '<br/>';
}
?>