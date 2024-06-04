<?php require("vista/cabecera.php");?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "inventarios") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT * FROM proveedores") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<h1>Base de Datos Usuarios</h1>
<a href="index.php">Mostrar Index</a>
<table class="table table-striped table-hover table-bordered border-primary border-info ">
    <thead>
        <tr>
            <th>IDproveedor</th>
            <th>Nombre</th>
            <th>Nit</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Nombre del Vendedor</th>
            <th>Correo electronico.</th>
        </tr>
    </thead>
    <tbody>
<?php
  while ($reg = mysqli_fetch_array($registros)) {?>
  <tr>
     
     <td> <?php echo  $reg['IDproveedor'] ; ?> </td>
     <td> <?php echo $reg['Nombre'] ; ?> </td>     
     <td> <?php  echo$reg['Nit'] ; ?> </td>
     <td> <?php  echo$reg['Direccion'] ; ?> </td>
     <td> <?php  echo$reg['Telefono'] ; ?> </td>
     <td> <?php  echo$reg['Nombre del Vendedor'] ; ?> </td>
     <td> <?php  echo$reg['Correo electronico.'] ; ?> </td>

    
  <?php
  }?>
  </tr>
  <?php
  mysqli_close($conexion);
  ?>
   </tbody>
  </table>

  <?php require("vista/piedepagina.php");?>