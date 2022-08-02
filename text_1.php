<?php

//exercice 2
$number=1289;
$neg=$number<0;
$number=abs($number);
$number=strval($number);
$newval="";
for($i=$number.length-1; $i>=0;$i--){
    $newval.=$number[$i];
}
$final=$newval;
if($neg){
    $final="-".$newval;
}

echo $final;

?>

