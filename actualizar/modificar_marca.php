<?php include ('../includes/ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="modificar_marca.php" method="post">
            <h2>Modificar Registros</h2>

    <!-- 
            <div class="contenedor-inputs">
                <label class="label-inputs-formulario"  for="id-marca">Id Marca:</label>
                <input class="entrada-datos" type="text" id="id-marca" name="id-marca" required placeholder="Este campo no debe poder modificarse. "><br>

            </div> -->


            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="marca">Marca:</label>
                <input class="entrada-datos" type="text" id="marca" name="marca" required><br>

            </div>



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="fabricante">Fabricante:</label>
                <input class="entrada-datos" type="text" id="fabricante" name="fabricante" required><br>
            </div>

            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="pais">País:</label>
                <input class="entrada-datos" type="text" id="pais" name="pais" required><br>
            </div>



            <input class="boton-ingresar" name="guardar-marca" type="submit" value="Registrar">




            <?php
        
        if (isset($_SESSION['mensaje'])) { ?>
            <div class="contenedor-mensaje">
                <p class="mensaje"><?php echo $_SESSION['mensaje'] ?> </p>
                <input class="input-mensaje"  name="mensaje" type="submit" value="X">
            <?php session_unset(); } ?>
        
    

            </div>





        </form>


 
        <div class="contenedor-tabla">

                <table class="tabla">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">País</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $query = "SELECT * FROM marca";
                            $respuesta_marca = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($respuesta_marca)) { ?>
                                <tr>
                                    <td> <?php echo $row['id_marca'] ?> </td>
                                    <td> <?php echo $row['marca'] ?> </td>
                                    <td> <?php echo $row['fabricante'] ?> </td>
                                    <td> <?php echo $row['pais'] ?> </td>
                                    <td>
                                        <!-- <a href="../ edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><img src="../img/edit.ico" alt="" width="25px" height="25px"></a>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"><img src="../img/delete.ico" alt="" width="25px" height="25px"></a> -->

                                        <div class="contenedor-imagen">
                                            <a class="caja-imagen caja-imagen-edit" href="/creacion/modificar_marca.php">
                                                <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                            </a>
                                            <a class="caja-imagen caja-imagen-delete" href="/creacion/modificar_marca.php">
                                                <img class="icono icono-delete" src="../img/delete.ico" alt="">
                                            </a>

                                        </div>

                                        
                                    </td>
                                </tr>
                            <?php }
                        
                        ?>
                    </tbody>
                </table>

        </div>





    </div>





    <script> 
        function closeDiv() { 
            var div = document.getElementById('myDiv'); 
            if (div) { 
                div.style.display = 'none'; 
            } 
        }

    </script>







<?php include ('footer.php') ?>