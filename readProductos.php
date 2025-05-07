<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h2> "Abarrotes" </h2>
    <table>
        <tr>
            <th> Id </th>
            <th> Nombre </th>
            <th> Fabricante </th>
            <th> Caducidad</th>
            <th> Existencia </th>
        <tr> 
<?php
include 'DB/ProductosDB.php';
$dbProducto = new ProductosDB();
$datos = $dbProducto->getProducto();
foreach ($datos as $dato):?>
    <tr>
        <td><?= $dato['id']?></td>
        <td><?= $dato['nombre']?></td>
        <td><?= $dato['fabricante']?></td>
        <td><?= $dato['caducidad']?></td>
        <td><?= $dato['existencia']?></td>

    </tr>
<?php endforeach ?>
</table>
<a href="productosIndex.php">Regresa al index</a>
</body>
</html>