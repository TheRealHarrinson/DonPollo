<?php
     include("Navegacion.php");
     echo "<h1>REGISTRO DE ESTUDIANTES</h1>";

   include("../controlador/RegistrarEstudiantes.php");
    echo '<form action="RegistroEstudiantes.php" method="post">
        <label for="CodigoEstudiante">Codigo de estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="PrimerNombreEstudiante">Primer nombre:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante"><br>
        <label for="SegundoNombreEstudiante">Segundo nombre:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante"><br>
        <label for="PrimerApellidoEstudiante">Primer apellido:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante"></textarea><br>
        <label for="SegundoApellidoEstudiante">Segundo apellido:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"><br>
        <label for="CursoDeEstudiante">Curso de estudiante:</label>
        <input type="number" name="CursoDeEstudiante"id="CursoDeEstudiante"><br>
        <label for="EspecialidadEstudiante">Especialidad de estudiante</label>';
          include("../controlador/ComboEspecialidades.php");
     echo '   <br>
             <label for="ProyectoEstudiante">Proyecto</label>';
             include("../controlador/ComboProyectos.php");
           echo'  <br>

             
    <label for="FechaNacimiento">Fecha de nacimiento:</label>
    <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
    <button type="submit">Registrar Estudiante</button><br>

    </form>';

    include("Footer.php");
    ?>
