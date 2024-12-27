<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>


<div class="contenedor-formulario">


    <form class="formulario-ingreso" action="procesar_ingreso.php" method="post" enctype="multipart/form-data">
        <h2>Registro de Equipos</h2>

<!-- 
        <div class="contenedor-inputs">
            <label class="label-inputs-formulario"  for="nr_inventario">Número de Inventario:</label>
            <input class="entrada-datos" type="text" id="nr_inventario" name="nr_inventario" required><br>

        </div> -->

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="nr_serie">Número de Serie:</label>
            <input class="entrada-datos" type="text" id="nr_serie" name="nr_serie" required><br>
        </div>

        <div class="contenedor-inputs">
            <label class="label-inputs-formulario" for="marca">Marca:</label>
            <input class="entrada-datos" type="text" id="marca" name="marca" required><br>

        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="modelo">Modelo:</label>
            <input class="entrada-datos" type="text" id="modelo" name="modelo" required><br>
        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="gama">Gama:</label>
            <input class="entrada-datos" type="text" id="gama" name="gama" required><br>

        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="descripcion">Descripción:</label>
            <textarea class="entrada-datos" id="descripcion" name="descripcion" required></textarea><br>
        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="fecha_ingreso">Fecha de Ingreso:</label>
            <input class="entrada-datos" type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>

        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="estado">Estado:</label>
            <input class="entrada-datos" type="text" id="estado" name="estado" required><br>
        </div>

        <div class="contenedor-inputs">

            <label class="label-inputs-formulario" for="ubicacion">Ubicación:</label>
            <input class="entrada-datos" type="text" id="ubicacion" name="ubicacion" required><br>
        </div>

        <div class="contenedor-inputs">

        <label class="label-inputs-formulario-imagen" for="imagen">Imagen:</label>
        <input class="entrada-datos-imagen" type="file" id="imagen" name="imagen" accept="image/*"><br>
        </div>








        <input class="boton-ingresar" type="submit" value="Ingresar Equipo">
    </form>

</div>













<?php include ('footer.php') ?>
