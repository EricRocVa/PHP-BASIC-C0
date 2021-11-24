<?php
function mijnNaamIsGroot() {
        $voorNaam = "Eric";
        $achterNaam = "Oehlers";
        $geheleNaam = $voorNaam ." ".$achterNaam;
        echo strtoupper($geheleNaam);
    }
mijnNaamIsGroot();
?>