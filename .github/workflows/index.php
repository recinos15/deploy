<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy</title>
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
    </header>
    <section>
        <?php
        // Obtener la fecha y hora actual
        $fecha_actual = date("d/m/Y H:i:s");
        // Mostrar la fecha y hora actual en un párrafo
        echo "<p>La fecha y la hora actual: $fecha_actual</p>";
        ?>
    </section> 
    <footer>
        <?php
        // Obtener el año actual
        $year = date("Y");
        // Mostrar el año actual y el nombre del desarrollador
        echo "$year Desarrollado por Roberto";
        ?>
    </footer>
</body>
</html>
