<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Filtrado NBA</title>
</head>

<body>
    <main>
        <header>
            <img src="css/NBA-logo-png-download-free-1200x675.png" alt="logo nba">
            <h1>Filtrado NBA</h1>
        </header>
        <section>
            <form action="filtrado.php" method="post">
                <h4>Equipo local</h4>
                <select name="elocales">
                    
                </select>
                <h4>Equipo visitante</h4>
                <select name="evisitantes">
                
                </select>
                <h4>Temporada</h4>
                <select name="temps">
                
                </select>
                <br><br>
                <input type="submit" value="FILTRAR">
            </form>
        </section>
    </main>
</body>

</html>