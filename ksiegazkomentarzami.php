<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiega final</title>
    <style>

    body{
        font-family: Arial;
    }

    input, textarea{
        background-color: #ecc1fd79;
        border: none;
        border-bottom: solid purple 2px; 
        width: 20%;
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
    <form action="ksiegazkomentarzami.php" method="post">
        <input type="text" name="imie" placeholder="Wprowadź imię">
        <br>
        <textarea name="komentarz" placeholder="Dodaj komentarz"></textarea>
        <br>
        <button type="submit" name="Dodaj">Dodaj</button>
        <br>
    </form>
</body>
</html>
<?php

//! punkt a)

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['imie'])){
        $uchwyt = fopen('goscie.txt', 'a');

        $gosc = "<strong>" . $_POST['imie'] . "</strong> |" . $_POST['komentarz'] . "|" . "\n";
        

        fwrite($uchwyt, $gosc);

        
        fclose($uchwyt);

        header("Location: " . $_SERVER['REQUEST_URI']); 
    }

    echo implode("<br>", explode(" ", file('goscie.txt') . "<br>"));

?>