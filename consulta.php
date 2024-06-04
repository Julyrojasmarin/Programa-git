<?php require("vista/cabecera.php");?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "usuarios") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT * FROM empleados") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<h1>Base de Datos Usuarios</h1>
<a href="usuarios.php">Mostrar Usuarios</a>
<table>
    <thead>
        <tr>
            <th>IDempleado</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Ndocumento</th>
            <th>Numcontacto</th>
        </tr>
    </thead>
    <tbody>
<?php
  while ($reg = mysqli_fetch_array($registros)) {?>
  <tr>
     
     <td> <?php echo  $reg['IDempleado'] ; ?> </td>
     <td> <?php echo $reg['Nombre'] ; ?> </td>     
     <td> <?php  echo$reg['Apellidos'] ; ?> </td>
     <td> <?php  echo$reg['Ndocumento'] ; ?> </td>
     <td> <?php  echo$reg['Numcontacto'] ; ?> </td>
    
  <?php
  }?>
  </tr>
  <?php
  mysqli_close($conexion);
  ?>
   </tbody>
  </table>

  <?php require("vista/piedepagina.php");?>