<?php
function mijnNaamIsGroot(){
    $voorNaam = "Eric";
    $achterNaam = "Oehlers";
    $geheleNaam = $voorNaam . " " . $achterNaam;
    echo "Mijn naam is $geheleNaam";
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;

}
mijnNaamIsGroot(); 