<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- INSERIMENTO FRASE-->
    <div>
    <form action="badWords.php" method="GET">
    <label for="phrase">Inserisci una frase </label>
    <input type="text" name="phrase" id="nome" placeholder="Inserisci la tua frase">
    <button type="submit"> Invia</button>
   </form> 
    </div>
    <!-- PAROLA DA CENSURARE-->
    <div>
    <form action="badWords.php" method="GET">
    <label for="censura">Inserisci una parola da censurare </label>
    <input type="text" name="censura" id="censura" placeholder="parola da censurare">
    <button type="submit"> censura</button>
   </form> 
    </div>
   
</body>
</html>