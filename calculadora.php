<?php

//import do arquivo de erros
require_once('function/erros.php');

//import do arquivo de funções e constante do projeto
require_once('function/funcaocalculadora.php');


// declarando uma variavel e definindo o seu tipo de dados
$resultado = (double) 0; 
$valor1 = (double) 0;
$valor2 = (double) 0;
$chkSub = (string) null;
$operacao = (string) null;

 

//Criando constantes para o projeto

 

 

/* 
    - string = tipo de dado trabalha com texto
    - int ou integer = tipo de dado -numericos inteiro
    - double = tipo de dados numerico com casas decimais -- -(capacidade maior de armazenamento )
    float = tipos de dados  numerico com casas decimais  (capacidade menor de armazenamento )
    boolean ou bool = tipos de dados (true/false)
    array = tipos de dados para vetores e matrizes
    object = tipo de dados para referenciar um objeto
*/

 


//validação para verificar se o botao calcular foi acionado 
if(isset ( $_POST['btnCalcular'])){
    
    // empty() - permite verificar se um elemento é vazio
    
    // validação para caixa vazia
    if($_POST['valor1']=="" || $_POST['valor2']=="")
        echo (ERRO_CAIXA_VAZIA);
    else{
         // resgatando valores do formulario no html
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        

 

    //resgata o valor do radios e converte a escrita para maiuscula 
    //stroupper () maiusculo
    //strtolower () minusculo
        
        // validação para a escolha de uma operação de calculo
        if(isset( $_POST['rdocal'])){
             $operacao = strtoupper( $_POST['rdocal']);
            
            //validação para verificar se os dados são números
            if(is_numeric($valor1) && is_numeric($valor2)){
                
                // chamada da função calcular, enviando os argumentos 
                //de valores e operacao
             $resultado = calcular($valor1,$valor2,$operacao);
                
               
            } //validação para verificar se os dados são números
            else
                echo(ERRO_DADOS_NAO_NUMERICOS);
            
        }  // validação para a escolha de uma operação de calculo
        else{
            echo(ERRO_CAIXA_VAZIA);
        }
   
    
   
    }  // validação para caixa vazia
    
} //validação para verificar se o botao calcular foi acionado

 

?>


<!DOCTYPE html>
<hmtl>
         <head>
        <meta charset="utf-8">
        <title> Calculos</title>
       <link rel="stylesheet" type="text/css" href="CSS/calculadora.css">
    </head>
    <body>
           <div id="menu">
  <div id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
  </div>
  <nav class="nav" id="nav">
    <ul>
      <li><a href="principal.php">Inicio</a></li>
      <li><a href="media.php">Média</a></li>
      <li><a href="calculadora.php">Calculadora</a></li>
      <li><a href="tabuada.php">Tabuada</a></li>
      <li><a href="parimpar.php">Pares e Impares</a></li>
    </ul>
  </nav> 
</div>

<div class="menu-bg" id="menu-bg"></div>
        
        
        <script>
           function menuOnClick() {
  document.getElementById("menu-bar").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("menu-bg").classList.toggle("change-bg");
}
        
        </script>
        
        <div class="frmCalculo">
             <header class="titulo">
                <h1>Calculadora </h1>
            </header>
            <div>
                <form action="" name="frmMedia" method="post"> 
                    <div> 
                        <label> Valor 1:</label>
                        <input name="valor1" maxlength="4" type="text" placeholder="Digite um numero" value="<?=$valor1?>">
                    </div>
                    <div> 
                        <label> Valor 2:</label>
                        <input name="valor2" maxlength="4" type="text" placeholder="Digite um numero" value="<?=$valor2?>">
                    </div>
                    
                    <div>
                       
                        <input name="rdocal" type="radio" value="soma" <?php 
                               if($operacao == 'SOMA')
                                   echo ('checked');
                               ?>> Somar
                        
                    </div>
                    
                    <div>
                        <input name="rdocal" type="radio" value="sub" <?=$operacao=='SUB'? 'checked' : ''?>> Subtrair
                    
                    </div>
                    <div>
                         <input name="rdocal" type="radio" value="mult"  <?php 
                               if($operacao == 'MULT')
                                   echo ('checked');
                               ?>> Multiplicar
                    </div>
                    
                    <div>
                        <input name="rdocal" type="radio" value="div"  <?= $operacao == 'DIV'? 'checked':'' ?>> Dividir
                    </div>
                    <div id="btn">
                        <input type="submit" name="btnCalcular" value="Calcular" id="calcular">
                    </div>
                    
                    <div id="resultado">
                        <?=$resultado?>
                    </div>
                </form>
            </div>
            
        </div>
        
    </body>
</hmtl>