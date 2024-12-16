<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiega gosci</title>
    <style>

    body{
        font-family: Arial;
    }

    input{
        background-color: #ecc1fd79;
        border: none;
        border-bottom: solid purple 2px; 
    }

    p{
        width: 20vw;
        font-size: 4vh;
    }

    button{
        border: none;
        border-bottom: solid purple 2px;
        border-radius: 8%;
        background-color: #ecc1fd79;
    }

    button:hover{
        background-color: #ecc1fdbd;
    }

    </style>
</head>
<body>
    <form action="ksiegagosci.php" method="post">
        Wprowadź imię: <input type="text" name="imie">
        <br>
        <button type="submit" name="Dodaj">Dodaj</button>
        <br>
    </form>
</body>
</html>
<?php

//! punkt a)

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['imie'])){
        $uchwyt = fopen('imiona.txt', 'a');

        $imie = $_POST['imie'] . "\n";


        fwrite($uchwyt, $imie);

        
        fclose($uchwyt);

        header("Location: " . $_SERVER['REQUEST_URI']); 
    }

    echo implode("<br>", file('imiona.txt'));

?>