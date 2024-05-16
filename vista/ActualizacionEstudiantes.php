
<?php
     include("Navegacion.php");
     echo "<h1>ACTUALIZAR ESTUDIANTE</h1>";

   include("../controlador/ActualizarEstudiante.php");
    echo '<form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEstudiante"].'">
        <label for="CodigoEstudiante">Codigo de estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"
        value="'.$Registro["CodigoEstudiante"].'"><br>
        <label for="PrimerNombreEstudiante">Primer nombre:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante" 
        value="'.$Registro["PrimerNombreEstudiante"].'"><br>
        <label for="SegundoNombreEstudiante">Segundo nombre:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante"
        value="'.$Registro["SegundoNombreEstudiante"].'"><br>
        <label for="PrimerApellidoEstudiante">Primer apellido:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante" value="'.$Registro["PrimerApellidoEstudiante"].'"></textarea><br>
        <label for="SegundoApellidoEstudiante">Segundo apellido:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante" value="'.$Registro["SegundoApellidoEstudiante"].'"><br>
        <label for="CursoDeEstudiante">Curso de estudiante:</label>
        <input type="number" name="CursoDeEstudiante"id="CursoDeEstudiante" value="'.$Registro["CursoDeEstudiante"].'"><br>
        <label for="EspecialidadEstudiante">Especialidad de estudiante</label>.';
           include("../controlador/ComboEspecialidades.php");
           echo '
        <br>
             <label for="ProyectoEstudiante">Proyecto</label>';
             include("../controlador/ComboProyectos.php");
             echo '
             <br>

             
    <label for="FechaNacimiento">Fecha de nacimiento:</label>
    <input type="date" name="FechaNacimiento" id="FechaNacimiento" value="'.$Registro["FechaNacimiento"].'"> <br>
    <button type="submit">Actualizar Estudiante</button>

    </form>';
     include("Footer.php");
?>
