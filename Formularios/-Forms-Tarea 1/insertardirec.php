<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dirección Validada</title>
</head>

<body>
    <?php
    echo 'La dirección es:<br>';
    echo $_POST['tipocalle'] . ' ' . $_POST['calle'] . ', nº ' . $_POST['numero'] . '<br>';
    echo $_POST['poblacion'] . ' (' . $_POST['pais'] . ')';
    echo '</div>';
    ?>
</body>

</html>