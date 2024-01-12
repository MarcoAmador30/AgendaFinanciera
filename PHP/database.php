<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'Chabeleitor1',
        'agenda_financiera'
    );

    if(!$conexion){
        die('Base de datos no conectada');
    }
?>