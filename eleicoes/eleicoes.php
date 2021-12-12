<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css2/estilo2.css">
  <title>Eleições</title>
</head>

<body>
  <div>
    <?php
    $an = $_GET["an"];
    $idad = 2021 - $an;
    echo "voce nasceu em $an entao sua idade é $idad<br>";
    $r = ($idad < 18 || $idad < 65) ? "Seu voto é obrigatório" : "Seu voto não é obrigatório";
    echo "$r";

    ?>
  </div>
</body>

</html>