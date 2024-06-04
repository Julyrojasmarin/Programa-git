<?php require("vista/cabecera.php");?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "usuarios") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT * FROM empleados") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>1
<a href="index.php">Mostrar Index</a>

<table class="table table-striped table-hover table-bordered border-primary border-info ">
    <thead>
        <th>IDempleado</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ndocumento</th>
        <th>Numcontacto</th>
        
    </thead>
    <tbody>

<?php
  while ($reg = mysqli_fetch_array($registros)) {?>
 
 <tr>    
      <th> <?php echo  $reg['IDempleado'] ; ?> </th>
      <th> <?php echo $reg['Nombre'] ; ?> </th>    
      <th> <?php  echo$reg['Apellidos'] ; ?> </th>
      <th> <?php  echo$reg['Ndocumento'] ; ?> </th>
      <th> <?php  echo$reg['Numcontacto'] ; ?></th> </>
    
      </tr>
  <?php
  }?>
  </tbody>
  </table>
  <?php
  mysqli_close($conexion);
  ?>
   <?php require("vista/piedepagina.php");?>