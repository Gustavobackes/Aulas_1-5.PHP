<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css2/estilo2.css">
  <title>Aula7</title>
</head>

<body>
  <div>
    <?php
$n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "<h2>Os valores passados foram $n1 e $n2 <br></h2>";
    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; //Se "$tipo" for "s", acontece a soma, senao,a multiplicação
    echo "$r<br>";

    //Igual & Identico
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "sim" : "não"; //O igual == não considera o tipo
    echo "<br/>A variavel A é igual a B? $r";
    $a = 3;
    $b = "3";
    $r = ($a === $b) ? "sim" : "não"; //O identico === considera o tipo
    echo "<br>A variavel A é igual a B? $r";
    ?>
  </div>
</body>

</html>
