<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventana Emergente</title>
  <script>
    function showAlert(message) {
      alert(message);
    }
  </script>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensaje = "Hola, este es un mensaje emergente desde PHP.";
    echo "<script type='text/javascript'>showAlert('$mensaje');</script>";
  }
  ?>
  
  <form method="post" action="">
    <button type="submit">Mostrar Mensaje Emergente</button>
  </form>
</body>
</html>
