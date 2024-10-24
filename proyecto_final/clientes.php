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
</div>
</header>
<main>
     <P><h1>CRUD ARTCULACION DEL SENA</h1> </P>
    <center>
    <h1>PAGINA DE CLIENTES</h1>
    <h2>Clientes Registrados</h2>
           <div class="clientes-formularios">
            <h2>crear clientes<h2>
                
                <from action="guardar.php" method="post">
                    <input type="text" name="tipo_documento" id="" placeholder="Digite Tipo de Documento"><br><br>
                    <input type="number" name="id_cliente" id="" placeholder="Digite su identificacion"><br><br>
                    <input type="text" name="nombres" id="" placeholder="Digite sus nombres"><br><br>
                    <input type="text" name="apellidos" id="" placeholder="Digite sus apellidos"><br><br>
                    <input type="text" name="direccion" id="" placeholder="Digite Tipo de Documento"><br><br>
                    <input type="text" name="celular" id="" placeholder="Digite su numero de celular"><br><br>
                    <input type="email" name="email" id="" placeholder="Digite su email"><br><br>
                    <input type="date" name="fecha_nacimiento" id="" placeholder="Digite su nacimiento"><br><br>
                    <input type="submit" value="Guardar">
                    </center>
                </form>
</div>
<div class="clientes-tabla">
    <h2>Clientes Registrados</h2><br>
    <table>
        <thead>
            <tr>
                <th widht="500px">Tipo de documento</th>
                <th widht="500px">Documento</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>direccion</th>
                <th>celular</th>
                <th>correo</th>
                <th>fecha de nacimiento</th>
                <th>editar</th>
                <th>eliminar</th>
            </tr>
        <thead>
        <tnody>
            <?php while($row=mysqli_fetch_array($query)): ?>
        <tr>
            <td width="200px"><?=$row['tipo_documento']?></td>
            <td width="200px"><?=$row['id_cliente']?></td>
            <td width="200px"><?=$row['nombre']?></td>
            <td width="200px"><?=$row['apellidos']?></td>
            <td width="200px"><?=$row['direccion']?></td>
            <td width="200px"><?=$row['celular']?></td>
            <td width="200px"><?=$row['email']?></td>
            <td><?=$row['fecha_nacimiento5']?></td>
            <td width="200px"><?=$row['tipo_documento']?></td>
            <td> <a href="actualizar.php?id=<?=$row['id_cliente'] ?>"><img src="imagenes/editar.png" width="50px" heigt="50px"></a></td>
            <td> <a href="eliminar.php?id=<?=$row['id_cliente'] ?>"><img src="imagenes/eliminar.png" width="50px" heigt="50px"></a></td>    
                </tr>  
                <?php endwhile;?> 
            </tbody>
        </table>
    </div>
</main>   
</body>
</html>

