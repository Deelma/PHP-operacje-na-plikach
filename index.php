<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na plikach</title>
    <style>

    body{
        font-family: Arial;
    }

    textarea{
        background-color: #ecc1fd79;
        border: solid purple 2px;
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
    <form action="index.php" method="post">
        <textarea name="tekst">Domyślna zawartość</textarea>
        <br>
        <button type="submit">Prześlij</button>
    </form>    
</body>
</html>

<?php




?>