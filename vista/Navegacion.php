<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/JAIMES_php1/css/estilo.css">
</head>
<body>

<ul>
  <li><a href="/JAIMES_php1/">Inicio</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/JAIMES_php1/vista/Estudiantes.php">Listar estudiante</a>
      <a href="/JAIMES_php1/vista/RegistroEstudiantes.php">Registrar estudiante</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/JAIMES_php1/vista/Proyectos.php">Listar proyectos</a>
      <a href="/JAIMES_php1/vista/RegistroProyectos.php">Registrar proyecto</a>
    </div>
  </li>

  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
  <div class="dropdown-content">
    <a href="/JAIMES_php1/vista/Especialidades.php">Listar especialidades</a>
    <a href="/JAIMES_php1/vista/RegistroEspecialidades.php">Registrar especialidad</a>
  </div>
</li>
</ul>';






