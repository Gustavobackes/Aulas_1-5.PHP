<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css2/estilo2.css">
  <meta charset="UTF-8">
  <title>AnoAtual</title>

</head>

<body>
  <div>
    <?php
    $anoatual = $_GET["aa"];
    echo "O ano atual é $anoatual e o ano anterior foi " . --$anoatual;
    $anoatual++;
    echo "<br/>E este é o ano atual novamente $anoatual</br>";
    echo "Este é o proximo ano: " . ++$anoatual;
    $anoatual++;
    echo "</br>dois anos depois: $anoatual";




    ?>
  </div>
</body>

</html>