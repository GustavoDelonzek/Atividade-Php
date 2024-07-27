<?php  
  
    function verificaPangrama($texto){
        
        $testes = array();

        foreach( range('a', 'z') as $elements) { 
            $resultado = strpos($texto, $elements);
            echo $resultado;
        } 
        
        
        
     
        
    }
    verificaPangrama("abawdasd")
    
?> 