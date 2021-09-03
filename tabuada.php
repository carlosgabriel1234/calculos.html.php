<?php 
//import do arquivo de variaveis e constante do projeto
require_once('function/erros.php');

//import do arquivo de funções e constante do projeto
require_once('function/funcaotabuada.php');

if(isset($_POST['btnCalcular']))
{
    
    
    if($_POST['tab']=="" || $_POST['cont']=="")
    
        echo(ERRO_CAIXA_VAZIA);
    else{
        
        $tabuada = (double) 0;
    $contador = (double) 0;
    $count=1;
        
            //Regastando valores do formulario no hmtl
    $tabuada = $_POST['tab'];
    $contador = $_POST['cont'];
    
      
    //Validação para verificar se os dados sao numeros
    if(is_numeric($tabuada) && is_numeric($contador)){
         
                 while($count<=$contador){
                    $operacao = $operacao .  $tabuada . " x " . $count . " = " .            ($tabuada*$count). "<br/>";
                        $count++;
                    
                        }
                    
    } else
    
         //Validação para verificar se os dados sao numeros
            echo(ERRO_DADOS_NAO_NUMERICOS);
      
    } //Validação para caixa vazia
}


 ?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>Menu Drop</title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/tabuada.css">
    </head>
    <body>
        <head>
        <meta charset="utf-8">
        <title> Calculos</title>
       <link rel="stylesheet" type="text/css" href="CSS/tabuada.css">
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
        
            <header>
                TABUADA
            </header>
             <div id="tabuada">
                     <form action="" method="post">
                       <div>
                <label>
                    Tabuada:
                </label>
                <input type="text" name="tab" >
                </div>
                <div>
                    <label>
                Contador:
                </label>
                <input type="text" name="cont">
                </div>
                <div>
            <input type="submit" name="btnCalcular" value="Calcular">
            </div>
                <div >
                    <h1>O Resultado é:<br> <?php echo($operacao);?>  </h1>    
            </div>
                <div>

                

                </div>
                    </form>
                    
                </div>    
        
    </body>
</hmtl>