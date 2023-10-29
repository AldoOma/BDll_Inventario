<?php
//include es una funcion que incluye el codigol archivo al que llamamos
include("conexion.php");

$con = new Conexion();//instancio la clase conexion

$query = "SELECT p.id_producto 'Id', p.codigo 'Codigo Producto', p.descripcion_producto 'Producto', m.descripcion 'Marca', pr.descripcion 'Proveedor', pre.descripcion 'Presentacion', z.descripcion 'Zona', p.peso 'Peso', p.stock 'Stock' from producto p INNER JOIN marca m on p.id_marca = m.id_marca INNER JOIN 
proveedor pr ON pr.id_proveedor = p.id_proveedor INNER JOIN presentacion pre 
ON pre.id_presentacion = p.id_presentacion INNER JOIN zona z ON z.id_zona = p.id_zona WHERE p.id_producto = 2;";

$registros = $con->mostrarDatos($query);//este es un array con los resultados
?>

<!doctype html>
<html lang="en">

<head>
  <title>Productos en el inventario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    body{
      padding:40px;
    }
  </style>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>

  </header>
  <main>
  <h1>Productos</h1>
  <table class="table">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Marca</th>
      <th scope="col">Presentacion</th>
      <th scope="col">Zona</th>
      <th scope="col">Peso</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($registros as $productos){?>
    <tr>
      <td><?php echo $productos['Id']?></td>
      <td><?php echo $productos['Codigo Producto']?></td>
      <td><?php echo $productos['Producto']?></td>
      <td><?php echo $productos['Proveedor']?></td>
      <td><?php echo $productos['Marca']?></td>
      <td><?php echo $productos['Presentacion']?></td>
      <td><?php echo $productos['Zona']?></td>
      <td><?php echo $productos['Peso']?></td>
      <td><?php echo $productos['Stock']?></td>
    </tr>
    <?php }?>
  </tbody>
</table>

  </main>
  <footer>

  </footer>

</body>

</html>