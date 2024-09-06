<?php

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
            <input type="number" min="6" max="25" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password generata:</label>
            <input type="password" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Genera</button>
    </form>
</body>

</html>