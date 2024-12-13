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
        Wprowadź imię: <input type="text" name="imie"><br>
        <button type="submit" name="Dodaj">Dodaj</button>
    </form>
</body>
</html>
<?php

//! punkt a)

?>