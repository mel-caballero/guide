<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'inicio';

  // Cargar el menú dinámico desde menu.php
  $temas = include(__DIR__ . '/data/menu.php');

  // Buscar la ruta correcta en el menú
  function definirRutaArchivo($temas, $page) {
      if ($page === 'inicio') {
          return __DIR__ . '/assets/inicio.php'; 
      }
      
      foreach ($temas as $categoria => $subtemas) {
          foreach ($subtemas as $subtema) {
              if ($subtema['nombre'] === $page) {
                  return __DIR__ . '/' . $subtema['ruta'];
              }
          }
      }
      return null;
  }

  // Verificar si el archivo existe antes de incluirlo
  $rutaArchivo = definirRutaArchivo($temas, $page);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CDN Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <!-- CDN Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.1.1/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.1/css/select.dataTables.min.css">
  <!-- Personal CSS -->
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <meta name="author" content="Melanie Caballero">
  <meta name="description" content="">
  <link rel="shortcut icon" href="img/favicon.ico">
  <title><?php echo ucfirst($page); ?> - Guía de Accesibilidad</title>
</head>
<body>
  <?php include("assets/header.php"); ?>
  <main id="content" class="row p-5">
      <?php
      if ($rutaArchivo && file_exists($rutaArchivo)) {
          include($rutaArchivo);
      } else {
          echo "<section><h2>Error 404</h2><p>La página no existe.</p></section>";
      }
      ?>
  </main>
  <?php include("assets/footer.php"); ?>
  
  <!-- jQuery Core 3.6.0 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- jQuery datatables-->
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/searchpanes/2.1.1/js/dataTables.searchPanes.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.6.1/js/dataTables.select.min.js"></script>
  <!-- JavaScript Bootstrap v. 5.3.3 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Personal JS -->
  <script src="./scripts/scripts.js"></script>
</body>
</html>
