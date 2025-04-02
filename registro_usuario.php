<?php

  include 'conexion.php';

  /*$id_cliente = $_POST['id_cliente'];*/
  $nombre_usuario = $_POST['nombre_usuario'];
  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];
  $rol = $_POST['rol'];

  $query = "INSERT INTO usuarios(nombre_usuario, email, contraseña, rol)
            VALUES('$nombre__usuario', '$email', '$contraseña', '$rol')";

  $ejecutar = mysqli_query($conexion, $query);

  /*if($ejecutar){
        echo '
            <script>
                alert("Estudiante almacenado exitosamente");
                window.location = "../Login.php";
            </script>
        ';
        Id_usuario`, `nombre_usuario`, `email`, `contraseña`, `rol`
        id_cliente`, `nombre`, `correo`, `contrasenia`, `telefono`, `direccion`
        id_usuario`, `nombre`, `correo`, `telefono`, `usuario`, `contraseña`
  }*/
?>