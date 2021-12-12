<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>AulaPHP1</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
  <div>
    <?php
    //Recebe os atrobitos "a" e "b" através da URL
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;
    echo "<h2>Valores obtidos são $n1 e $n2</h2>";
    echo "A media de $n1 e $n2 é = $m";
    echo "<br/>a divisao vale: " . ($n1 / $n2);
    echo "<br/>o modulo vale: " . ($n1 % $n2);
    ?>
  </div>
</body>


</html>
