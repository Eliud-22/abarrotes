<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Inserta</title>
</head>

<body>

    <?php
    include 'DB/ProductosDB.php';
    $productosDB = new ProductosDB();
    $renglones = $productosDB->insertaProductos($_GET['nombre'], $_GET['fabricante'], $_GET['caducidad'],$_GET['existencia']);

    if ($renglones == 1) : ?>
        <h2>Producto añadido</h2>
    <?php else : ?>
        <h2 style="color: red">Ocurrió un error, contacta con el administrador</h2>
    <?php endif; ?>

</body>

</html>
