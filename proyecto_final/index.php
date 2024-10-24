<?php
include("conexion.php");
$conexion=conexion();
$sql="SELECT * FROM clientes";
$query=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-=1.0">
    <tittle>CRUD SARAHT SUAREZ ROJAS</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="header">
        <h1>menu de incios</h1>
    </div>
</header>
<div class="nav">
    <a href="clientes.php">CLIENTES</a>
    <a href="proveedores.php">proveedores</a>
    <a href="categoria.php">Categorias</a>
    <a href="producto.php">productos</a>
    <a href="factura.php">factura</a>
    <a href="ventas.php">ventas</a>
    <a href="inicio.php">ventas</a>
</div>
</div>
</header>
<main>
    <h1>CRUD ARTICULACION SENA</h1>
    <h2>
        Bienvenido a mi pagina
</h2> 
<img src="./imagen/tecnologia.jpg" width="1000px" height="500px">
</body>

</html>

