<?php
/* Crear un array asociativo con la siguiente estructura:
Juan => [ altura=>175, pelo=>rubio, ojos=>azules ]
María=> [ altura=>168, pelo=>castaña, ojos=>marrones ]
Pedro => [ altura=>180, pelo=>castaño, ojos=>verdes ]

Mostrar por pantalla:
- La altura de Juan
- Los ojos de María
- El pelo de Pedro
*/

$personas = array ( 'Juan'=> array ('altura'=>175, 'pelo'=>'rubio', 'ojos'=>'azules'),
                    'María'=> array ('altura'=>168, 'pelo'=>'castaña', 'ojos'=>'marrones'),
                    'Pedro'=> array ('altura'=>180, 'pelo'=>'castaño', 'ojos'=>'verdes') );

echo 'La altura de Juan es ' . $personas ['Juan']['altura'] . ' cm <br>';
echo 'Los ojos de María son ' . $personas ['María']['ojos'] . '<br>';
echo 'El pelo de Pedro es ' . $personas ['Pedro']['pelo'];

?>