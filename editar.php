<?php
include 'clases/conexion.php';
include 'clases/producto.php';

$objConexion = new Conexion();
$objProducto = new Producto();

$conexion = $objConexion->conectar();
$datos = $objProducto->consultaId($conexion, $_GET['id']);

$nombre;
$descripcion;
$codigo;
$valorUni;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id'];
    $nombre = $dato['nombre'];
    $descripcion = $dato['descripcion'];
    $codigo = $dato['codigo'];
    $valorUni = $dato['valor_unitario'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form action="controlador/editar.php" method="post">
         <input type="hidden" name="id" value="<?php echo $id; ?>">    
        <label for="">Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
        <label for="">Descripcion: </label><textarea name="descripcion" id="" cols="30" rows="5"><?php echo $descripcion; ?></textarea><br>
        <label for="">Codigo: </label><input type="text" name="codigo" value="<?php echo $codigo; ?>"><br>
        <label for="">Valor Unitario: </label><input type="text" name="valorUnitario" value="<?php echo $valorUni; ?>"><br>
        <input type="submit" value="Actualizar">
    </form><br>
    <a href="consultar.php">Volver</a>
</body>
</html>