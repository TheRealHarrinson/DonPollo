<?php
     include("Navegacion.php");
     echo "<h1>REGISTRO DE PROYECTOS</h1>";




 include("../controlador/RegistrarProyecto.php");
 
 echo '<form action="RegistroProyectos.php" method="post">
        <label for="CodigoProyecto">Codigo de proyecto:</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto"><br>
        <label for="NombreProyecto">Nombre de proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
        <label for="Resumen">Resumen:</label>
        <textarea name="Resumen" id="Resumen" rows="5" cols="20"></textarea><br>
        <label for="FechaRegistro">Fecha de registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro">
        <button type="submit">Registrar Proyecto</button>
    </form>';
    
    include("Footer.php");
    ?>
