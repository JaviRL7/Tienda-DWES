<?php 
function conectar()
{
    return new PDO('pgsql:host=localhost;dbname=tienda', 'tienda', 'tienda');
}

function hh($x)
{
    return htmlspecialchars($x ?? '', ENT_QUOTES | ENT_SUBSTITUTE);
}
function obtener_parametro($par, $array)
{
    return isset($array[$par]) ? trim($array[$par]) : null;
}

function obtener_parametros(array $par, array $array): array
{
    $res = [];

    foreach ($par as $p) {
        $res[$p] = obtener_parametro($p, $array);
    }

    return $res;
}
function obtener_get($par)
{
    return obtener_parametro($par, $_GET);
}


?>