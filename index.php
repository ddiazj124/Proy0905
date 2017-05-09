<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include('lib/Producto.php');

$oProducto1 = new Producto();
$oProducto2 = new Producto("Nuevo Producto",2000,"2");
$oProducto3 = new Producto("Nuevo Producto",3000,"3");

$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo=1;


$aProductos[0] = $oProducto1;
$aProductos[1] = $oProducto2;
$aProductos[2] = $oProducto3;


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach($aProductos as $lista)
            {
                echo $lista->codigo.' '.$lista->nombre;
                echo "<br>";
            }
            
        ?>
    </body>
</html>
