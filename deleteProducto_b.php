<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Eliminación Moto</title>
</head>

<body>
<?php
include 'DB/ProductosDB.php';
$productoDB = new ProductosDB();
if ($productoDB->eliminaProductosPorId($_GET['id']) > 0): ?>
    <h2>Producto eliminado</h2>
<?php else: ?>
    <h2>No se pudo eliminar el producto</h2>
<?php endif ?>
<a href="productosIndex.php">Regresa al index</a>
</body>
</html>