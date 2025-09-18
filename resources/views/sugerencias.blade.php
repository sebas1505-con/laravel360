<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Módulo de Sugerencias</title>
  <link rel="stylesheet" href="{{ asset('css/sugerencias.css') }}">
</head>
<body>
  <div class="contenedor-sugerencia">
    <h1>Déjanos tu sugerencia</h1>
    <p>Queremos mejorar. Cuéntanos qué opinas de nuestra página:</p>

    <form action="#" method="post">
      <input type="text" name="nombre" placeholder="Tu nombre (opcional)" class="input-text" />
      <textarea name="sugerencia" placeholder="Escribe tu sugerencia aquí..." required class="textarea"></textarea>
      <button type="submit" class="btn-enviar">Enviar sugerencia</button>
    </form>
  </div>
</body>
</html>
