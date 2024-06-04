<?php require("vista/cabecera.php");?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "inventarios") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT * FROM productos") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<h1>Base de Datos Usuarios</h1>
<a href="index.php">Mostrar Index</a>
<table class="table table-striped table-hover table-bordered border-primary border-info ">
    <thead>
        <tr>
            <th>Nombre Del Producto</th>
            <th>Nombre del Proveedor</th>
            <th>Codigo del producto</th>
            <th>Precio de venta</th>
        </tr>
    </thead>
    <tbody>
<?php
  while ($reg = mysqli_fetch_array($registros)) {?>
  <tr>
     
     <td> <?php echo  $reg['Nombre Del Producto'] ; ?> </td>
     <td> <?php echo $reg['Nombre del Proveedor'] ; ?> </td>     
     <td> <?php  echo$reg['Codigo del producto'] ; ?> </td>
     <td> <?php  echo$reg['Precio de venta'] ; ?> </td>
    
  <?php
  }?>
  </tr>
  <?php
  mysqli_close($conexion);
  ?>
   </tbody>
  </table>

  <?php require("vista/piedepagina.php");?>