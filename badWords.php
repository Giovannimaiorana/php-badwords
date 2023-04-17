
<?php
$frase=$_GET['phrase'];
$censura=$_GET['censura'];
$lunghezzafrase = strlen(  $frase );
$testocensurato = str_replace($censura, '***', $frase);
$lunghezzafraseconcensura = strlen($testocensurato);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>La frase da te scelta:</h1>
<p><?php echo "$frase $lunghezzafrase" ?></p>
<h3>La parola che vuoi censurare è:</h3>
<p><?php echo "$censura"   ?></p>
<h4>La frase censurata è:</h4>
<p><?php echo "$testocensurato  $lunghezzafraseconcensura"   ?></p>
</body>
</html>