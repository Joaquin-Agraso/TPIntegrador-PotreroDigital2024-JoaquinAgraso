<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Propiedad</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg border border-gray-300">
        <h2 class="text-3xl font-bold text-blue-800 mb-4 text-center">Formulario de Propiedades</h2>
        <form action="../admin1/agregar_propiedad.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div class="form-row">
                <label for="nombre" class="block text-sm font-medium text-blue-800">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="tipo" class="block text-sm font-medium text-blue-800">Tipo:</label>
                <select name="tipo" id="tipo" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    <option value="casa">Casa</option>
                    <option value="departamento">Departamento</option>
                    <option value="terreno">Terreno</option>
                </select>
            </div>
            <div class="form-row">
                <label for="contrato" class="block text-sm font-medium text-blue-800">Contrato:</label>
                <select name="contrato" id="contrato" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    <option value="venta">En Venta</option>
                    <option value="alquiler">Alquiler</option>
                </select>
            </div>
            <div class="form-row">
                <label for="direccion" class="block text-sm font-medium text-blue-800">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="ciudad" class="block text-sm font-medium text-blue-800">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="provincia" class="block text-sm font-medium text-blue-800">Provincia:</label>
                <input type="text" name="provincia" id="provincia" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="ambientes" class="block text-sm font-medium text-blue-800">Ambientes:</label>
                <input type="number" name="ambientes" id="ambientes" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="tamano" class="block text-sm font-medium text-blue-800">Tamaño (m<sup>2</sup>):</label>
                <input type="number" name="tamano" id="tamano" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="precio" class="block text-sm font-medium text-blue-800">Precio ($USD):</label>
                <input type="number" name="precio" id="precio" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
            </div>
            <div class="form-row">
                <label for="imagen" class="block text-sm font-medium text-blue-800">Imagen:</label>
                <input type="file" name="imagen" id="imagen" class="mt-1 block w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="w-full text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 transition ease-in-out duration-150 shadow-lg">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>
</html>


