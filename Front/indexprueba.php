<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pdo = new PDO('pgsql:host=localhost;dbname=tienda', 'tienda', 'tienda');
    $sent = $pdo->query('SELECT * FROM articulos ORDER BY precio');

    echo "<pre>";
    foreach ($sent as $fila) {
        print_r($fila);
    }
    echo "</pre>";
    ?>
</body>
</html>