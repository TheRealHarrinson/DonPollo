<?php

     include("Navegacion.php");
     echo "<h1>ACTUALIZAR ESPECIALIDADES</h1>";

include("../controlador/ActualizarEspecialidades.php");
    echo ' <form action="ActualizacionEspecialidades.php" method="post">
        <input type="hidden" id="CodigoEspecialidadActual" name="CodigoEspecialidadActual" value="'.$_GET["CodigoEspecialidad"].'">
        <label for="CodigoEspecialidad">Codigo de especialidad:</label>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad"
        value="'.$Registro["CodigoEspecialidad"].'"><br>
        <label for="NombreEspecialidad">Nombre de especialidad:</label>';
        
     include("../controlador/ComboEspecialidades.php");
    echo '
    <br>
    <button type="submit">Actualizar especialidad</button>

    </form> ';

    include("Footer.php");

?>