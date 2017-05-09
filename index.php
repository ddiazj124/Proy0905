<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php


include('lib/Producto.php');
include('lib/ConsultaProducto.php');

$oProducto1 = new Producto();
$oProducto2 = new Producto("Nuevo Producto",2000,"2");
$oProducto3 = new Producto("Nuevo Producto",3000,"3");

$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo="1";
$oProducto1->precio=1000;


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
        
        $aProductos2 = new ConsultaProductos();
            foreach($aProductos2->Lista() as $lista)
            {
                echo $lista->codigo.' '.$lista->nombre.'/'.$lista->precio.'/'.$lista->totalUSD();
                echo "<br>";
            }
            
        ?>
    </body>
</html>
