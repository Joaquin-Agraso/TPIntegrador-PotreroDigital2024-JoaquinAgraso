<?php

    if(isset ($_GET["id"])){
        if(!empty($_GET["id"])){
            //Bien, borró correctamente
            $id=$_GET["id"];
            $conexion = mysqli_connect("127.0.0.1:3306", "root","","proyectophp");
            $query="DELETE FROM propiedad WHERE id_propiedad=".$id;
            $resultado = mysqli_query($conexion,$query);

            if($resultado){
                echo "Todo ok, producto eliminado";
                header('location: /backend/proyectoFinal/pages/tabla_propiedades_Admin.php');
            }else{
                echo "Error al borrar producto";
            }
            mysqli_close($conexion);

        }else{
            //Error no se borró nada
            echo "Error al borrar el producto, id vacio";
            echo "<br>";
        }
    }else{
        //Error no se borró nada
        echo "Error al borrar el producto, id no definido";
        echo "<br>";
    }



?>