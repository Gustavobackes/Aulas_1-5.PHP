<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css2/estilo2.css">
  <title>Media</title>
</head>

<body>
  <div>
    <?php
    $n1 = $_GET["n"]; //recebe os valores da URL
    $n2 = $_GET["m"];
    $m = ($n1 + $n2) / 2;
    echo "As notas 1 e 2 são repectivamente: $n1 e $n2";
    echo "<br>E a média é: $m";

    echo "<br>O aluno foi " . (($m < 6) ? "Reprovado" : "Aprovado");
    ?>
  </div>
</body>

</html>
