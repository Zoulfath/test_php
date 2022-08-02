<?php
//exercice 1

$input=array(2,7,11,15);
$target=9;
for($i=0;$i<$input.length;$i++){
    for($j=$i+1;$j<$input.length;$j++){
        if($input[i]+$input[j]===$target){
            echo $i.",".$j;
        }
        else'break';
    }
}



?>