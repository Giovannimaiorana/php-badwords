
<?php
$frase=$_GET['phrase'];
$censura=$_GET['censura'];
$lunghezzafrase = strlen(  $phrase );
$testocensurato = str_replace($censura, '***', $phrase);
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

</body>
</html>