<?php
    
    // Captar los datos que llegan desde el formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if(!empty($usuario) && !empty($contrasena)){
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectophp");

        $sql = $conexion ->query("SELECT * FROM usuario_adm WHERE usuario = '$usuario' AND contrasena = '$contrasena' ");

        if($sql->num_rows>0){
            //Si las credenciales son correctas
            header("Location: ../pages/tabla_propiedades_Admin.php");
            exit();

        }else{
            //Si las credenciales son incorrectas
            echo "Usuario o contraseña incorrectos";
        }
        
        $conexion->close();
    }

?>