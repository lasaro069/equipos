<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>


<div class="contenedor-formulario">


    <form class="formulario-ingreso" action="procesar_ingreso.php" method="post" enctype="multipart/form-data">
        <h2>Registro Tipo de Vehículo</h2>


        <div class="contenedor-inputs">
            <label class="label-inputs-formulario"  for="id-tipo">Id Tipo:</label>
            <input class="entrada-datos" type="text" id="id-tipo" name="id-tipo" required placeholder="Este campo no debe poder modificarse. "><br>

        </div>


        <div class="contenedor-inputs">
            <label class="label-inputs-formulario" for="tipo">Tipo:</label>
            <input class="entrada-datos" type="text" id="tipo" name="tipo" required><br>

        </div>










        <input class="boton-ingresar" type="submit" value="Registrar">
    </form>

</div>













<?php include ('footer.php') ?>
