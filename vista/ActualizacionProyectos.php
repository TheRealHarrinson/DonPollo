<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de especialidades</title>
</head>
<body>
    <h1>Actualizacion de especialidades</h1>
   <?php include("../controlador/ActualizarEspecialidad.php");?>
    <form action="ActualizacionEspecialidades.php" method="post">
        <input type="hidden" id="CodigoEspecialidadActual" name="CodigoEspecialidadActual" value="<?php echo $_GET["CodigoEspecialidad"];?>">
        <label for="CodigoEspecialidad">Codigo de especialidad:</label>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad"
        value="<?php echo $Registro["CodigoEspecialidad"]; ?>"><br>
        <label for="NombreEspecialidad">Nombre de especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad" 
        value="<?php echo $Registro["NombreEspecialidad"]; ?>"><br>

      <?php include("../controlador/ComboEspecialidades.php");?>

        <br>
            
    <button type="submit">Registrar Estudiante</button><br>

    </form>

    
</body>
</html>