<?php

    //CONEXION A LA BASE DE DATOS mysqli_connect(servidor:puerto, usuario,password,esquema)
    $conexion = mysqli_connect("127.0.0.1:3306", "root","","proyectophp");//127.0.0.1 es lo mismo que localhost -- Lo guardo en una variable para poder hacer operaciones

    if($conexion === false){//chequeo que este conectado correctamente
        echo "No pude conectarme";
        echo "<br>";
    }else{
        echo "Me conecte correctamente";
        echo "<br>";
    }
    
    //QUERY PARA AGREGAR NUEVO PRODUCTO
    /*$query="INSERT INTO propiedad (nombre_propiedad,tipo_propiedad,contrato_propiedad,direccion_propiedad,ciudad_propiedad,provincia_propiedad,ambientes_propiedad,tamano_propiedad,precio_propiedad)
    VALUES ('Casaquinta','Casa','Alquiler','Camino Rural km. 58','Venado Tuerto','Santa Fe',6,175,800) ";*/
    //Arriba creo la query para que sea mas prolijo
    //Debajo la ejecuto con la funcion mysqli_query(conexion,query)
    $resultado = mysqli_query($conexion,$query);//Si es un insert, delete o update gralmente devuelve true o false
    
    if($resultado===false){
        echo "La query salio mal";
        echo "<br>";
    }else{
        echo "la query salio bien, se agregro un nuevo producto a la base";
        echo "<br>";
    }
    
    
    //CERRAR CONEXION
    mysqli_close($conexion);

?>