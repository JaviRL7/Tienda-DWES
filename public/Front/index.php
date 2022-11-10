<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link href="/public/css/output.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-3xl font-bold underline">
    Hello world!
    </h1>
    <?php
    require '../../src/auxiliar.php';
    ?>

    <?php
    $pdo = conectar();
    $desde_codigo = obtener_get('desde_codigo');
    $hasta_codigo = obtener_get('hasta_codigo');
    $descripcion = obtener_get('descripcion');
    ?>
    <table>
        <th>codigo</th>
        <th>descripcion</th>
        <th>precio</th>
    </table>


    <div>
        <form action="" method="get">
            <fieldset>
                <legend>Criterios de búsqueda</legend>
                <p>
                    <label>
                        Desde código:
                        <input type="text" name="desde_codigo" size="8" value="<?= hh($desde_codigo) ?>">
                    </label>
                </p>
                <p>
                    <label>
                        Hasta código:
                        <input type="text" name="hasta_codigo" size="8" value="<?= hh($hasta_codigo) ?>">
                    </label>
                </p>
                <p>
                    <label>
                        Descripcion:
                        <input type="text" name="denominacion" value="<?= hh($descripcion) ?>">
                    </label>
                </p>
                <p>
                    <label>
                        Precio:
                        <input type="text" name="denominacion" value="<?= hh($precio) ?>">
                    </label>
                </p>
                <button type="submit">Buscar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>