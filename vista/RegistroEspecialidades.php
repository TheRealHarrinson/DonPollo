<?php
     include("Navegacion.php");
     echo "<h1>REGISTRO DE PROYECTOS</h1>";



include ("../controlador/RegistrarEspecialidad.php");

    echo '<form action="RegistroEspecialidades.php" method="post">
        <label for="CodigoEspecialidad">Codigo:</label>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad"><br>
        <label for="NombreEspecialidad">Nombre de Especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>';

include("Footer.php");
?>
    
