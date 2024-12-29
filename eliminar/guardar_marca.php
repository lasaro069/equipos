<?php

include ('../includes/ddbb.php');   // llamamos la conexión a la base de datos

    if (isset($_POST['guardar-marca'])) { // 'guardar-marca' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario
        $marca = $_POST['marca'];
        $fabricante = $_POST['fabricante'];
        $pais = $_POST['pais'];

        // creamos la consulta para insertar los datos en la tabla 'marcas'
        $query = "INSERT INTO marca (marca, fabricante, pais) VALUES ('$marca', '$fabricante', '$pais')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = 'Datos Guardados Exitosamente'; // creamos un mensaje para mostrar en la página
        header('Location: marca.php'); // redireccionamos a la página 'marca.php'
    }

?>