<?php 
    function inverterPalavra($palavra){
        $palavraInvertida = str_split($palavra);
        for ($i = strlen($palavra); $i >= 0; $i--){
            echo $palavraInvertida[$i];
        }
    }

    inverterPalavra("bom dia")
?>