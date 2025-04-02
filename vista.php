<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="CSS/vistas.css"> 
</head>
<body>
<nav>
        <div class="logo"> <img src="IMG/Vanilla-PMP_Collection-Carousel-0_Buzzy-Bees_1280x768.jpg"></div>
        <ul class="menu">
            <li><a href="Login.php">Inicio</a></li>
            <li><a href="vista.php">Vistas del login_granja</a></li>
        </ul>
</nav><br>
<h1>vistas</h1>
<section>
    <table border="1">
        <thead>
            <tr>
                <th>Tipo costo</th>
                <th>Total monto</th>
            </tr>
        </thead>
        <tbody>
            <?php include "C:\xampp\htdocs\login_granja\mostrar_vista1.php"; ?> 
        </tbody>
    </table>
</section><br>
<section>
<table border="1">
        <thead>
            <tr>
                <th>Id especie</th>
                <th>Nombre especie</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php include "mostrar_vista2.php"; ?> 
        </tbody>
    </table>
</section><br>
<section>
<table border="1">
        <thead>
            <tr>
                <th>Tipo produccion</th>
                <th>Total cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php include "mostrar_vista3.php"; ?> 
        </tbody>
    </table>
</section><br>
