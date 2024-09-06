<?php

function randomPassword($length)
{

    $chars = "a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 0 1 2 3 4 5 6 7 8 9 ! @ # $ % & * _";
    $charsArray = explode(" ", $chars);
    $password = '';


    for ($i = 0; $i < $length; $i++) {
        $password .= $charsArray[mt_rand(0, count($charsArray) - 1)];
    }

    return $password;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="get">
        <div class="mb-3">
            <label class="form-label">inserisci un numero da 6 a 25</label>
            <input type="number" min="6" max="25" class="form-control" name="length">

        </div>
        <div class="mb-3">
            <label class="form-label">Password generata:</label>
            <input type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Genera</button>
    </form>
</body>

</html>