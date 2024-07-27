<?php 
    function verificaPalin($palavra){
        if ($palavra == strrev($palavra)){
            echo "É um palindromo";
        } else {
            echo "Não é um palindromo";
        }
    }

    verificaPalin("renner");

?>