<?php
    // Captar los datos que llegan desde el formulario
    $id_propiedad = $_POST["id_prop"];
    $nombre_propiedad = $_POST["nombre"];
    $tipo_propiedad = $_POST["tipo"];
    $contrato_propiedad = $_POST["contrato"];
    $direccion_propiedad = $_POST["direccion"];
    $ciudad_propiedad = $_POST["ciudad"];
    $provincia_propiedad = $_POST["provincia"];
    $ambientes_propiedad = $_POST["ambientes"];
    $tamano_propiedad = $_POST["tamano"];
    $precio_propiedad = $_POST["precio"];
    $imagen_propiedad = $_FILES["imagen"];

    // Conexión a la base de datos
    if (isset($_POST["id_prop"]) && !empty($_POST["id_prop"])) { // Chequeo que exista un ID y no esté vacío
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectophp");

        // Consulta para obtener la imagen existente si no se ha subido una nueva
        $result = mysqli_query($conexion, "SELECT imagen_propiedad FROM propiedad WHERE id_propiedad = '$id_propiedad'");
        $row = mysqli_fetch_assoc($result);
        $imagen_base64 = $row['imagen_propiedad'];

        // Si se ha subido una nueva imagen y es válida
        if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
            // Obtener la extensión del archivo, necesaria para trabajar con base64
            $type = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
            // Obtener el contenido de la imagen en formato string (también necesario para base64)
            $data_imagen = file_get_contents($_FILES["imagen"]["tmp_name"]);
            // Obtener la codificación en base64 del contenido de la imagen ($data_imagen)
            $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data_imagen);
        }

        // Consulta para actualizar los datos
        $query = "UPDATE propiedad SET 
                    nombre_propiedad = '$nombre_propiedad', 
                    tipo_propiedad = '$tipo_propiedad', 
                    contrato_propiedad = '$contrato_propiedad', 
                    direccion_propiedad = '$direccion_propiedad', 
                    ciudad_propiedad = '$ciudad_propiedad', 
                    provincia_propiedad = '$provincia_propiedad', 
                    ambientes_propiedad = '$ambientes_propiedad', 
                    tamano_propiedad = '$tamano_propiedad', 
                    precio_propiedad = '$precio_propiedad', 
                    imagen_propiedad = '$imagen_base64' 
                WHERE id_propiedad = '$id_propiedad'";

        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            // Redireccionar a la página de tabla de propiedades si todo salió bien
            header('Location: /backend/proyectoFinal/pages/tabla_propiedades_Admin.php');
            exit();
        } else {
            echo "Error actualizando datos: " . mysqli_error($conexion);
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    } else {
        echo "Error al editar la propiedad: ID no especificado o vacío.";
    }
?>
