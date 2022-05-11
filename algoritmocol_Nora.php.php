<?php
$num=readline();
$suma=0;
for ($i = 1; $i <=$num; $i) {
     if ($i%3=0) {
         echo $i." ";
         $suma=$suma+1;
     }
}
echo "\n";
echo "hay ".$suma." numeros modulos de 3 en el intervalo 1-".$num;
?>