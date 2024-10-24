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
    <a href="clientes.html">CLIENTES</a>
    <a href="proveedores.html">proveedores</a>
    <a href="categoria.html">Categorias</a>
    <a href="producto.html">productos</a>
    <a href="factura.html">factura</a>
    <a href="ventas.html">ventas</a>
</div>
</header>
<main>
    <p>Crud Articulacion SENA</p>
    <h1>Pagina de Categorias</h1>
    <h2>Categorias Registrados</h2><br>
    <br>
</h2> 
<img src="./imagen/categoria.jpg" width="200px" height="200px">
</body>

</html>