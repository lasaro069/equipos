<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>


<div class="contenedor-formulario">


    <form class="formulario-ingreso" action="procesar_ingreso.php" method="post" enctype="multipart/form-data">
        <h2>Registro estado de Vehículos</h2>


        <div class="contenedor-inputs">
            <label class="label-inputs-formulario"  for="id-estado">Id Estado:</label>
            <input class="entrada-datos" type="text" id="id-estado" name="id-estado" required placeholder="Este campo no debe poder modificarse. "><br>

        </div>


        <div class="contenedor-inputs">
            <label class="label-inputs-formulario" for="estado">Estado:</label>
            <input class="entrada-datos" type="text" id="estado" name="estado" required><br>

        </div>






        <input class="boton-ingresar" type="submit" value="Registrar">
    </form>

</div>













<?php include ('footer.php') ?>
