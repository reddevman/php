<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Resultados de las notas de los alumnos</title>
</head>
<body>
    <?php
        if (isset($_POST["nombre"],$_POST["apellidos"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"])) {
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            
            $curso = $_POST["curso"];
            $ciclo = $_POST["ciclo"];
            $notaProgram = $_POST["notaprog"];
            $notaEntornos = $_POST["notaentornos"];
            $notaLenguajes = $_POST["notalenguajes"];
            $notaBBDD = $_POST["notabbdd"];

            $media = 0;
            $media = mediaNotas($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD);
            $mayor = notaMasAlta($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD);
            $menor = notaMasBaja($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD);

            echo '<h1>La información del alumno es la siguiente:</h1>';
            echo '<h2>' . $nombre . ' ' . $apellidos . '</h2>';
            echo '<h3>' . $curso . ' ' . $ciclo . '</h3>';
            echo 'La nota media es de: ' . $media . '<br>';
            echo 'La nota más alta es: ' . $mayor[0] . ' = ' . $mayor[1] . '.<br>';
            echo 'La nota más alta es: ' . $menor[0] . ' = ' . $menor[1] . '.<br>';
        } else echo '<b>ERROR</b>: Debes introducir nombres y apellidos.';



        /* *****************************FUNCIONES *******************************************/

        # Función para realizar la media de las 4 asignaturas
        function mediaNotas ($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD){
            $media = ($notaProgram+$notaEntornos+$notaLenguajes+$notaBBDD)/4;
            return $media;
        }

        # Función para la nota más alta
        function notaMasAlta ($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD){
            $mayor = $notaProgram;
            $nombre = 'Programación';
            if ($notaEntornos > $mayor) {
                $mayor = $notaEntornos;
                $nombre = 'Entornos de Desarrollo';
            } else if ($notaLenguajes > $mayor) {
                $mayor = $notaLenguajes;
                $nombre = 'Lenguajes de Marca';
            } else if ($notaBBDD > $mayor) {
                $mayor = $notaBBDD;
                $nombre = 'Bases de Datos';
            } else echo 'Todas las asignaturas tienen la misma nota.<br>';
            return array ($mayor,$nombre);
        }

        # Función para la nota más alta
        function notaMasBaja ($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD){
            $menor = $notaProgram;
            $nombre = 'Programación';
            if ($notaEntornos < $menor) {
                $menor = $notaEntornos;
                $nombre = 'Entornos de Desarrollo';
            } else if ($notaLenguajes < $menor) {
                $menor = $notaLenguajes;
                $nombre = 'Lenguajes de Marca';
            } else if ($notaBBDD < $menor) {
                $menor = $notaBBDD;
                $nombre = 'Bases de Datos';
            } else echo 'Todas las asignaturas tienen la misma nota.<br>';
            return array ($menor,$nombre);
        }
    ?>
</body>
</html>