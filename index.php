<?php 
    $password = '';

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>
    </head>
    <body>
        <main>
            <form action="index.php" method="get">
                <input type="number" name="length" id="length">
                <button type="submit">invia</button>
            </form>
            <?php 
                if(isset($_GET['length'])) {
                    $psw_length = $_GET['length'];
                    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                                    .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                                    .'0123456789!@#$%^&*()'); // and any other characters
                    shuffle($seed); // probably optional since array_is randomized; this may be redundant
                    foreach (array_rand($seed, $psw_length) as $k) $password .= $seed[$k];
                    echo $password;
                }
            ?> 

        </main>
    </body>
</html>