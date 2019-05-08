<?php 
require 'config.php';
$mensaje = "";
if(isset($_POST['label'])) {
  $label = $_POST['label'];
  $y = $_POST['y'];
  $link->query("INSERT INTO datapoints (id, label, y) VALUES (NULL, '$label', '$y');");
  $mensaje = "Se ha agregado";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agregar dato</title>
  <style>
      body {
          background-color: #3c6477;
          text-align:center;
      }
      input, a {
          padding: 10px;
          margin: 10px;
          width: 200px;
          font-size: 22px;
      }
      .btn-1 {
        background-color: green;
      }
      .btn-2 {
        background-color: red;
      }

      h2 {
        color: white;
      }
      a {
        color: black;
      }
  </style>
</head>
<body>
  <form action="#" method="POST">
    <h2 style="color: green"><?php echo $mensaje ?></h2>
    <h2>Fecha:</h2>
    <input type="date" name="label" value="<?php echo date('Y-m-d'); ?>">
    <h2>Gasto: $</h2>
    <input type="number" name="y"><br>
    <a class="btn-2" href="index.php">< Regresar</a>
    <input type="submit" class="btn-1" value="Agregar">
  </form>
</body>
</html>