<?php
function maakBerekening(){
    $koopprijs = 75;
    $procent = 10;
    $kortingInEuro = ($koopprijs / 100) * $procent;
    return $koopprijs - $kortingInEuro;
}

    function zetAllesGroot(){
        echo '<h4>' . maakBerekening() . `</h4>`;
    }
zetAllesGroot();
?>