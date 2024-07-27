<?php
    function imprime(){
        for($i = 1; $i <= 20; $i++){
            if ($i % 3 == 0){
                echo "?";
            } else{
                echo $i;
            }
            echo "<br>";
        }
    }

    imprime()

?>