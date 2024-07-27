<?php
    function contaFrase($frase){
        $numeroPalavra = str_word_count($frase);
        $invertidaFrase = explode(' ', $frase);

        echo "Numero de palavras:";
        echo $numeroPalavra;

        for($i = $numeroPalavra; $i >= 0; $i--){
            echo $invertidaFrase[$i];
            echo "<br>";
        }

        
    }

    contaFrase("Qualquer coisa teste");



?>