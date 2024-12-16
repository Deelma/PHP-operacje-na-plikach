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
        <?php
            echo '<textarea name="tekst" value="Domyślna zawartość">';
            
            //! Zadanie 1
            
            if(isset($_POST['tekst'])){
                
                $wpisanytekst = $_POST['tekst'];

                $uchwyt = fopen('notatki.txt', 'w');

            
                fwrite($uchwyt, $wpisanytekst);
            
                
                fclose($uchwyt);
            
            }  

            //! Zadanie 2

            $odczyt = fopen('notatki.txt', 'r');

            $wielkoscpliku = filesize('notatki.txt');
            
            
            echo fread($odczyt, $wielkoscpliku);
            

            fclose($odczyt);
            
            
            echo '</textarea>';
        ?>
        <br>
        <button type="submit">Prześlij</button>
    </form>    
</body>
</html>

