<?php

    function campos(int $inicio, int $final){
        for($i = $inicio; $i <= $final; ++$i)
            echo "<option value='$i'>" . $i . "</option>";
    }


 function retornaImpar(int $inicio, int $final){
        $retorno = (string)null;
        
        if( !(($inicio % 2) != 0) )
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno = $retorno . $inicio . "<br>";
        
        return $retorno;
    }

    function quantidadeImpar(int $inicio, int $final){
        $retorno = (int)0;
        
        if( !(($inicio % 2) != 0) )
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno++;
        
        return $retorno;
    }

    function retornaPar(int $inicio, int $final){
        $retorno = (string)null;
        
        if(($inicio % 2) != 0)
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno = $retorno . $inicio . "<br>";
        
        return $retorno;
    }

    function quantidadePar(int $inicio, int $final){
        $retorno = (int)0;
        
        if(($inicio % 2) != 0)
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno++;
        
        return $retorno;
    }

    
?>