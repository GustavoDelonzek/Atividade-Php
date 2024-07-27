<?php  
  
    function verificaPangrama($texto){
        $texto = strtolower($texto);
        $testes = array();

        foreach( range('a', 'z') as $elements) { 
            $resultado = strpos($texto, $elements);
            if($resultado !== false) {   
                array_push($testes, $resultado);
            }
        } 
    
        if (count($testes) == 26){
            echo "É pangrama";
        } else{
            echo "Não é." . " Faltam " . 
            (26 - count($testes)) . " letras";
        }
        
    }
    verificaPangrama("Tv faz quengo explodir com whisky jb");
    
?> 