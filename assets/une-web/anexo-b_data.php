<?php
  header('Content-Type: application/json');

  $jsonFile = __DIR__ . '/anexo-b.json';

  // Verificar si el archivo existe
  if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    echo $jsonData; // Devuelve el JSON directamente
  } else {
    echo json_encode(["error" => "Archivo JSON no encontrado"]);
  }
  exit; // Evita que se mezcle con HTML
?>
