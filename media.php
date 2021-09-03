
<?php 


//import do arquivo de erros
require_once('function/erros.php');

//import do arquivo de funções e constante do projeto
require_once('function/funcaomedia.php');


$media = 0;
$nota1=null;
$nota2=null;
$nota3=null;
$nota4=null;

if (isset($_POST['btnCalcular']))
    
    //valida se o botão calcular foi adicionado
{
    $nota1 = $_POST['txtnota1'];
    $nota2 = $_POST['txtnota2'];
    $nota3 = $_POST['txtnota3'];
    $nota4 = $_POST['txtnota4'];
    
    //is_numeric()
    
    /* operadores de comparação
     <
     >
     <=
     >=
     !=
     ==
     ===( compara o conteudo e o tipo de dados)
     ==! (compara o conteudo e o tipo de dados)*/
    
    
    //tratamento para caixa vazia
    if ($nota1 == "" || $nota2 == ""|| $nota3 == "" || $nota4 == "")
    {
        echo("<script> alert('Caixas Vazias!')</script>");
    }
    else
    {
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
        {
            $media = ($nota1+ $nota2+ $nota3+ $nota4) /4;
        }
    
        else
        {
            echo("<script> alert ('Não foi possivel calcular com dados não númericos');</script>");
        }
    }
    
   
}
?>



<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title> Calculos</title>
       <link rel="stylesheet" type="text/css" href="CSS/media.css">
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
        
            
            <div id="formContatos" > 
            <h1> Calculo De Médias</h1>
            
              <form name="frmContatos" action="" 
                 method="post">
              <div>
                <label>
                   Nota 1:
               </label>
               <input type="text" name="txtnota1"
                      size="50" maxlength="40" value="<?=$nota1?>" placeholder="" >
               
               </div>
                <div>
                <label>
                   Nota 2:
               </label>
               <input type="text" name="txtnota2"
                      size="50" maxlength="40" value="<?=$nota2?>" placeholder="" >
               
               </div>
                <div>
                <label>
                   Nota 3:
               </label>
               <input type="text" name="txtnota3"
                      size="50" maxlength="40" value="<?=$nota3?>" placeholder="" >
               
               </div>
                <div>
                <label>
                   Nota 4:
               </label>
               <input type="text" name="txtnota4"
                      size="50" maxlength="40" value="<?=$nota4?>" placeholder="" >
               
               </div>
             <input type="submit" name="btnCalcular" value="Calcular">
               
             <div id="botaoReset">
                 <a href="media.php">
                    Novo Cálcular
                 </a>
                 
               </div>
               <h1 class="inferior"> 
                   A média é: <?php  echo ($media);?> 
               </h1>
            
            
                </form>
            
            
            
<!--
        <div id="caixaMenu">
            <ul id="menu">
                <li class="menuItem"> 
                   Menu
                    <div id="caixaSubMenu">
                        <ul>
                            <li>Média</li>
                            <li>Calculadora</li>
                            <li>Tabuada</li>
                            <li>Pares e Impares</li>
                        </ul>
                    </div>
                </li>
               
                </ul>
        
-->
         </div>
    
    </body>
</hmtl>