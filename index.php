<?php

function randomPassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[mt_rand(0, strlen($chars) - 1)];
    }

    return $password;
}

$generatedPassword = '';

if (isset($_GET['input_string'])) {
    $inputString = $_GET['input_string'];
    $length = strlen($inputString);

    if ($length > 0) {
        $generatedPassword = randomPassword($length);
    } else {
        $generatedPassword = "Inserisci una stringa valida.";
    }
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Generatore di Password</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Generatore di Password Casuali</h1>
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="input_string" class="form-label">Inserisci una stringa (A-Z, a-z, 0-9, caratteri speciali)</label>
                <input type="text" class="form-control" id="input_string" name="input_string" required>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>

        <?php if ($generatedPassword): ?>
            <div class="mt-4">
                <label class="form-label">Password generata:</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($generatedPassword) ?>" readonly>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>