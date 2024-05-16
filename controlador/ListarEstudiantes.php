<?php

include("bd.php");

$Consulta = "select * FROM estudiante";
$Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo listar los estudiantes";
         //print $e->getMessage();
         print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($Resultado == False) { $Mensaje="No se pudo listar los estudiantes";
    //die($mysqli_error($Conexion)); 
    }
else {
     echo '<table border= "1">
     <tr>
         <td>Codigo del estudiante</td>
         <td>Nombre del estudiante</td>
         <td>Segundo nombre del estudiante</td>
         <td>Apellido del estudiante</td>
         <td>Segundo apellido del estudiante</td>
         <td>Curso del estudiante</td>
         <td>Especialidad del estudiante</td>
         <td>Proyecto del estudiante</td>
         <td>Fecha de nacimiento</td>
         <td colspan="2">Acciones</td>
         
     </tr>';
     while($Registro=$Resultado->fetch_assoc()){
        echo'
   <tr>
     <td>'.$Registro["CodigoEstudiante"].'</td>
     <td>'.$Registro["PrimerNombreEstudiante"].'</td>
     <td>'.$Registro["SegundoNombreEstudiante"].'</td>
     <td>'.$Registro["PrimerApellidoEstudiante"].'</td>
     <td>'.$Registro["SegundoApellidoEstudiante"].'</td>
     <td>'.$Registro["CursoDeEstudiante"].'</td>
     <td>';
     include("NombreEspecialidad.php");
     echo '</td>
     <td>';
     include("NombreProyecto.php"); 
     echo '</td>
     <td>'.$Registro["FechaNacimiento"].'</td>
     <td><a href="ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">EDITAR</a></td>
     <td><a href="#" onclick="Preguntar('.$Registro["CodigoEstudiante"].')">ELIMINAR</a></td>
   </tr>';

    }//Fin del ciclo del listado de especialidades
     echo '</table>';
}


 


?>

<script type="text/javascript">
    function Preguntar(CodigoEstudiante)
    {
        if(confirm("¿Está seguro de eliminar el estudiante con codigo "+CodigoEstudiante+"?"))
        {
            window.location.href = "Estudiantes.php?CodigoEstudiante="+CodigoEstudiante;
        }
    }
</script>