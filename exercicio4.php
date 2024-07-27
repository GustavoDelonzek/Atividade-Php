<?php
    function oquee($numero){
        if ($numero > 0){
            echo "positvo";
        } elseif ($numero < 0) {
            echo "negativo";
        } else{
            echo "zero";
        }
    }

    oquee(0)
?>