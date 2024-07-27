<?php
    function muda($palavra){
        $teste = str_replace(["a", "e", "i", "o", "u"], "*", $palavra);
        echo $teste;
    }

    muda("Teste")

?>