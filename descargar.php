<?php
$url = $_GET['url'] ?? '';
$nombre = $_GET['nombre'] ?? 'archivo';

if (empty($url) || !str_contains($url, 'supabase.co')) {
  http_response_code(400);
  exit('URL inválida');
}

$contenido = file_get_contents($url);
if ($contenido === false) {
  http_response_code(500);
  exit('Error al obtener el archivo');
}

$extension = pathinfo($nombre, PATHINFO_EXTENSION);
$tipos = [
  'pdf' => 'application/pdf',
  'doc' => 'application/msword',
  'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
  'jpg' => 'image/jpeg',
  'jpeg' => 'image/jpeg',
  'png' => 'image/png',
];

$tipo = $tipos[strtolower($extension)] ?? 'application/octet-stream';

header('Content-Type: ' . $tipo);
header('Content-Disposition: attachment; filename="' . $nombre . '"');
header('Content-Length: ' . strlen($contenido));

echo $contenido;