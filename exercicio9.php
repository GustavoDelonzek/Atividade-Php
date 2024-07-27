<?php
    function fibonacci($posicao){
        if ($posicao == 0){
            return 0;
        } elseif ($posicao == 1) {
            return 1;
        } else{
            return fibonacci($posicao -1) + fibonacci($posicao - 2);
        }
    }

    for ($i = 0; $i <= 10; $i++) {
        echo fibonacci($i) . "<br>";
    }
?>