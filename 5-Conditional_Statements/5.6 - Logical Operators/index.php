<?php
$var =12;
$var1 = 10;
if($var < 10 && $var1 > 5){
    echo "het getal zit tussen de 10 en de 5 in" . "<br>";
}
else{
    echo "het getal is groter of kleiner dan tussen de 10 en 5" . "<br>";
}

if($var <10 || $var1 > 5){
    echo "Ik heb eigenlijk nog steeds geen idee wat dit is" . "<br>";
}
else{
    echo"nog steeds weet ik het eigenlijk niet" . "<br>'";
}

if($var <10 xor $var1 > 5){
    echo "1 Van de twee waardes zijn goed als ik het goed heb" . "<br>";
}
else{
    echo "Blijkbaar had ik het fout" . "<br>";
}

if($var <10 != $var1 > 5){
    echo "Ik weet eigenlijk ook niet wat dit is maar er staat een fout in de module we moeten '!' gebruiken maar het is eigenlijk '!=' anders werkt het niet";
}
else{
    echo"Weet nog steeds niet" . "<br>";
} 