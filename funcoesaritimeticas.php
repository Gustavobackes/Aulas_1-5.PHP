<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css">
  <meta charset="UTF-8">
  <title>Funcoes Aritimeticas em PHP</title>
  <style>
    h2 {
      font-size: 15pt Arial;
      color: blue;
      font-weight: bold;
    }

    h3 {
      font-size: 5pt Arial;
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos $v1 e $v2</h2>";
    echo "o valor absoluto de $v2: " . abs($v2);
    echo "<br>o valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
    echo "<br>a raiz de $v1: " . sqrt($v1);
    echo "<br>o valor arredondado de $v2 é " . round($v2);
    echo "<br>O valor de $v1 em moeda é: " . number_format($v1, 2, ',', '.');
    $a = 2;
    $b = 3;
    $b += $a;
    echo "<h3>O valor de b é: $b</h3>";

    ?>
  </div>
</body>

</html>