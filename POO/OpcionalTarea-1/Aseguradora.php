<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aseguradora</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        require 'cliente.php';
        require 'factura.php';
        require 'indemnizacion.php';
        /**
         * NO es necesario añadir a esta clase el require de traits.php porque ya lo tienen
         * las otras clases factura e indemnizacion
         */

        # Instanciamos un nuevo objeto de FACTURA y probamos sus métodos
        $cliente1 = new Factura('12364598F','Pepe','Martín',35,23654);
        $cliente1->datosCliente($cliente1->getDni());
        echo 'La factura es la nº' . $cliente1->datosFactura() . '.<br>';
        echo 'El total de la factura sin IVA es de ' . $cliente1->totalSinIVA() . ' euros.<br>';
        echo 'La factura TOTAL con IVA es de: ' . $cliente1->calculaIVA($cliente1->getImporteFactura())  .'.<br><br>';
        echo '<hr><br>';
        # Instanciamos un nuevo objeto de INDEMNIZACIÓN y probamos sus métodos
        $clienteIndemnizado = new Indemnizacion('56231478C','Luis','Ténez',23654);
        $cliente1->datosCliente($cliente1->getDni());
        echo 'El total de la factura sin IVA es de ' . $clienteIndemnizado->totalSinIVA() . ' euros.<br>';
        echo 'La factura TOTAL con IVA es de: ' . $clienteIndemnizado->calculaIVA($clienteIndemnizado->getImporteFactura())  .'.<br><br>';
        echo $clienteIndemnizado->indemnizado();


    ?>    




</body>
</html>