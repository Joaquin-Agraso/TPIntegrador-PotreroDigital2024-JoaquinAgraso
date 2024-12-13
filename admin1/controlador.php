<?php
    
    // Captar los datos que llegan desde el formulario

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
   
    if(!empty($usuario) && !empty($contrasena)){

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectophp");

        $query = "SELECT * FROM usuario_adm WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexion,$query);
        
        if($resultado){
            $row = mysqli_fetch_assoc($resultado);

            if($row){
                $hash_contrasena = $row['contrasena'];
                if(password_verify($contrasena,$hash_contrasena)){
                    header("Location: ../pages/tabla_propiedades_Admin.php");
                    exit();
                }else{
                    header("Location: ../login/login.php?error=Contrasena%20invalida");
                }
            }else{
                header("Location: ../login/login.php?error=Usuario%20incorrecto");
            }
        }else{
            header("Location: ../login/login.php?error=error%20en%20consulta");
        }

        $conexion->close();
    }

?>