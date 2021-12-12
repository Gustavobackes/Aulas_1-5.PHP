<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css2/estilo2.css">
  <meta charset="UTF-8">
  <title>AnoAtual</title>
  <style>
    h2 {
      font-size: 10pt Arial;
      color: blueviolet;
    }
  </style>
</head>

<body>

  <div>
    <?php
    $a = 5;
    $b = $a;
    $b += 10;
    echo "<h2>Sem & no A</h2>";
    echo "A vale $a";
    echo "<br/>B vale 10 + a = $b";
    echo "<h2>Com & no A</h2>";
    $a = 5;
    $b = &$a;
    $b += 10;
    echo "<br>A vale $a";
    echo "<br/>B vale 10 + a = $b </br>";
    
    //Variaveis de variaveis
    echo "--------------<br/>";
    $x = "hello";
    $$x = "world";
    echo "$x ${$x}";
    //Retorna na tela "hello world"
    ?>
  </div>
</body>

</html>
