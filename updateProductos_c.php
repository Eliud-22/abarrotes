<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Update b</title>
</head>

<body>
<?php
include 'DB/ProductosDB.php';
$productoDB = new ProductosDB();

if ($productoDB->updateProductosById($_GET) == 1)
    print ("<h2>Producto modificado</h2>\n");
else
    print("<h2>No se pudo modificar el producto</h2>\n");
?>
<a href="productosIndex.php">Regresa al index</a>
</body>
</html>
