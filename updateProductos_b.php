<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Update b</title>
</head>

<body>
<h2>Modificar datos del producto</h2>

<?php include 'DB/ProductosDB.php';
$productoDB = new ProductosDB();
$producto = $productoDB->getProductoById($_POST['id']);
?>

<form action="updateProductos_c.php" method="GET">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>">
    <br>
    <label for="fabricante">Fabricante:</label>
    <input type="text" name="fabricante" value="<?= $producto['fabricante'] ?>">
    <br>
    <label for="caducidad">Caducidad:</label>
    <input type="text" name="caducidad" value="<?= $producto['caducidad'] ?>">
    <br>
    <label for="existencia">Existencia:</label>
    <input type="text" name="existencia" value="<?= $producto['existencia'] ?>">
    <br>
    <input type="hidden" name="id" value="<?= $producto['id']?>">
    <br>
    <input
     type="submit" value="Modificar">
</form>
</body>
</html>

