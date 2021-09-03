<!DOCTYPE html>

 

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title> Calculos</title>
       <link rel="stylesheet" type="text/css" href="CSS/principal.css">
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
        
        
    </body>
</html>