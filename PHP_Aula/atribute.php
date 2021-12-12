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
    $preco = $_GET["p"];
    echo "o preco é R$" . $preco;
    $preco -= $preco * 10 / 100;
    echo "</br>com aumento de 10% fica: R$" . number_format($preco, 2, ',', '.');

    ?>
  </div>
</body>

</html>