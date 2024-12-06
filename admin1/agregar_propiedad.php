<?php
//Capto los datos que llegan desd el formulario
    $nombre_propiedad = $_POST["nombre"];
    $tipo_propiedad =$_POST["tipo"];
    $contrato_propiedad=$_POST["contrato"];
    $direccion_propiedad=$_POST["direccion"];
    $ciudad_propiedad=$_POST["ciudad"];
    $provincia_propiedad=$_POST["provincia"];
    $ambientes_propiedad=$_POST["ambientes"];
    $tamano_propiedad=$_POST["tamano"];
    $precio_propiedad=$_POST["precio"];
    $imagen_propiedad=$_FILES["imagen"];

    //Obtengo la extension del archivo, que la neceito para trabajar con base64
    $type=pathinfo($imagen_propiedad["name"], PATHINFO_EXTENSION);// tambien puede ser pathinfo($_FILES["imagen_propiedad"]["name"])
    //echo $type;//chequeo que llegue la extension del archivo
    
    //Obtengo el contenido de la imagen en formato string (tambien necesario para base64)
    $data_imagen = file_get_contents($_FILES["imagen"]["tmp_name"]);
    // Ó $data_imagen =file_get_contents($imagen_producto["tmp_name"]);

    //Obtengo la codificacion en base64 del contenido de la imagen ($data_imagen)
    $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data_imagen);

    //CONEXION A BASE DATOS
    $conexion = mysqli_connect("127.0.0.1:3306", "root","","proyectophp");

    $query = "INSERT INTO propiedad (nombre_propiedad, tipo_propiedad, contrato_propiedad, direccion_propiedad, ciudad_propiedad, provincia_propiedad, ambientes_propiedad, tamano_propiedad, precio_propiedad, imagen_propiedad) VALUES ('$nombre_propiedad', '$tipo_propiedad', '$contrato_propiedad', '$direccion_propiedad', '$ciudad_propiedad', '$provincia_propiedad', '$ambientes_propiedad', '$tamano_propiedad', '$precio_propiedad', '$imagen_base64')";

    $resultado = mysqli_query($conexion,$query);
    if ($resultado){
        //Salio todo OK
        header('Location:/backend/proyectoFinal/pages/tabla_propiedades_Admin.php');
    }else{

    }
    //CERRAR CONEXION
    mysqli_close($conexion);
?>  