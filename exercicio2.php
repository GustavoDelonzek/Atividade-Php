<?php
    function verificaPrimo($numero){
        $quantidade = 0;
        for($i = 1; $i <= $numero; $i++){
            if ($numero % $i == 0){
                $quantidade++;

            }
        }
        if ($quantidade == 2){
            echo "é primo";
        } else{
            echo "não é primo";
        }
    }

    verificaPrimo(931);
?>