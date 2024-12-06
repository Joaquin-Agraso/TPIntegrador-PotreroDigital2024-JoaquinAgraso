<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg border border-gray-300">

        <!--Conecto a la base de datos para obtener los datos de la propiedad-->
        <?php
            $conexion = mysqli_connect("127.0.0.1:3306", "root","","proyectophp");
            if(!$conexion){
                die("Conexion Fallida: " . mysqli_connect_error());
            }

            //Obtengo la propiedad a editar
            $id=$_GET["id"];

            $query = "SELECT * FROM propiedad WHERE id_propiedad =".$id;
            $resultado = mysqli_query($conexion, $query);

            if($fila = mysqli_fetch_assoc($resultado)){
                echo '<h2 class="text-3xl font-bold text-blue-800 mb-4 text-center">Editar propiedad</h2>
                    <form action="../admin1/editar_propiedad.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                        <div class="form-row">
                            <input type="hidden" name="id_prop" id="id_prop" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["id_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="nombre" class="block text-sm font-medium text-blue-800">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["nombre_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="tipo" class="block text-sm font-medium text-blue-800">Tipo:</label>
                            <input type="text" name="tipo" id="tipo" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["tipo_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="contrato" class="block text-sm font-medium text-blue-800">Contrato:</label>
                            <input type="text" name="contrato" id="contrato" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["contrato_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="direccion" class="block text-sm font-medium text-blue-800">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["direccion_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="ciudad" class="block text-sm font-medium text-blue-800">Ciudad:</label>
                            <input type="text" name="ciudad" id="ciudad" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["ciudad_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="provincia" class="block text-sm font-medium text-blue-800">Provincia:</label>
                            <input type="text" name="provincia" id="provincia" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["provincia_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="ambientes" class="block text-sm font-medium text-blue-800">Ambientes:</label>
                            <input type="number" name="ambientes" id="ambientes" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["ambientes_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="tamano" class="block text-sm font-medium text-blue-800">Tamaño (m<sup>2</sup>):</label>
                            <input type="number" name="tamano" id="tamano" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["tamano_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="precio" class="block text-sm font-medium text-blue-800">Precio ($USD):</label>
                            <input type="number" name="precio" id="precio" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent" value="'.$fila["precio_propiedad"].'">
                        </div>
                        <div class="form-row">
                            <label for="imagen_actual" class="block text-sm font-medium text-blue-800">Imagen Actual:</label>
                            <img name="imagen_actual" id="iamgen_actual" src="'.$fila["imagen_propiedad"].'" alt="Imagen de Usuario" class="w-32 h-32 object-cover rounded-md">
                        </div>
                        <div class="form-row">
                            <label for="imagen" class="block text-sm font-medium text-blue-800">Cambiar Imagen:</label> 
                            <input type="file" name="imagen" id="imagen" class="mt-1 block w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="../admin1/editar_propiedad.php?id=' . $fila["id_propiedad"] . '"><button type="submit" class="w-full text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 transition ease-in-out duration-150 shadow-lg">Enviar</button></a>
                        </div>
                    </form>';
            }else{
                echo "No hay datos de esta propiedad";
                exit();
            }

            mysqli_close($conexion);

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>
</html>