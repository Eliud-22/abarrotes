<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Modificar producto</title>
</head>

<body>
<h2>Modificar producto</h2>
<form action="updateProductos_b.php" method="POST">

    <label for="id">Producto:</label>
    <select list="producto" name="id">
        <?php
        include 'DB/ProductosDB.php';
        $productoDB = new ProductosDB();
        $producto = $productoDB->getProducto();
        foreach ($producto as $producto):?>
            <option value="<?= $producto['id'] ?>"> <?= $producto['nombre'] ?> <?= $producto['fabricante'] ?><?= $producto['caducidad'] ?></option>
        <?php endforeach ?>
    </select>

    <input type="submit" value="Elegir">

</form>
</body>
</html>
