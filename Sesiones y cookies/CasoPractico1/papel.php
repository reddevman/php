<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Tienda - Papel</title>
</head>

<body>
    <div class="main-wrapper">
        <h1>2º DAW - SESIONES Y COOKIES - CASO PRÁCTICO 1</h1>
        <div class="formulario">
            <form action="./proceso.php" method="post">
                <fieldset>
                    <legend>PAPELES</legend>
                    <label for="papeles">CANTIDAD</label>
                    <input type="number" name="papeles" min="0" value="0" required>
                    <input type="submit" value="AÑADIR">
                </fieldset>
            </form>
            <a href="./index.php">INICIO</a>
        </div>
    </div>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>