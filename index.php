<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AO_U2_PHP_POO</title>
</head>
<body style="background-color:beige">

    <?php
    $nombre = "Sebastian";
    $apellido = "Farias";
    $edad = 36;
    $hobbie = "Realizar deportes";
    $editor_preferido = "Visual Studio Code";
    ?>

    <p>Mi nombre es: <b><?php echo $nombre ?></b></p>
    <p>Mi apellido es: <b><?php echo $apellido ?></b></p>
    <p>Mi edad es: <b><?php echo $edad . " años"; ?></b></p>
    <p>Mis hobbies son: <b><?php echo $hobbie; ?></b></p>
    <p>Mi editor preferido es: <b><?php echo $editor_preferido; ?></b></p>
    <p>Mi sistema operativo es: <b><?php echo PHP_OS; ?></b></p>
</body>
</html>

