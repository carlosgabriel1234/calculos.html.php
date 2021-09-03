<?php
    include_once "function/erros.php";
    include_once "function/funcaoparimpar.php";

    $impar = (string)null;
    $par = (string)null;
    $imparQ = (int)0;
    $parQ = (int)0;

    if(isset($_POST["enviar"])){
        if( empty(["inicial"])  || empty($_POST["final"]) ){ 
            echo ("Erro: campos não preenchido");
        }
        else{
        
        $inicial = (int)$_POST["inicial"];
        $final = (int)$_POST["final"];
        
            
        if($inicial > $final)
            echo ("Erro: " . ERRO_MAIOR . ", $inicial é maior que $final");
        else if($inicial == $final)
            echo ("Erro: O valores são iguais ($inicial).");
        else{
            $par = retornaPar($inicial, $final);
            $parQ = (int)quantidadePar($inicial, $final);
            $impar = retornaImpar($inicial, $final);
            $imparQ = (int)quantidadeImpar($inicial, $final);
        }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
 <head>
        <meta charset="utf-8">
        <title> Calculos</title>
       <link rel="stylesheet" type="text/css" href="CSS/parimpar.css">
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
        Impar ou Par
        </header>
        
        <form method="post" action="" name="">
            <div class="container" >
                <select name="inicial">
                    <option selected disabled>Por favor, insira um número.</option>
                    <?php
                        campos(0, 500);
                    ?>
            </select>
                <select name="final">
                    <option selected disabled>Por favor, insira outro número.</option>
                    <?php
                        campos(100, 1000);
                    ?>
                </select>
            </div>
            <div class="resultado">
                <div class="resultado">
                    <h1>
                        PARES
                    </h1>
                    <p>
                        <?=$par?>
                    </p>
                    <h3>
                        Quantidade: <?=$parQ?>
                    </h3>
                </div>
                <div class="resultado">
                    <h1>
                        IMPARES
                    </h1>
                    <p>
                        <?=$impar?>
                    </p>
                    <h3>
                        Quantidade: <?=$imparQ?>
                    </h3>
                </div>
            </div>
            <div class="enviar">
                <input name="enviar" type="submit">
            </div>
        </form>
</body>
</html>
