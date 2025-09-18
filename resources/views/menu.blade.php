<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menú de Roles — Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>
  <header class="encabezado">
    <h1>Bienvenido a Deportes 360</h1>
  </header>

  <main class="roles">
    <!-- Cliente con enlace a login.html -->
    <a href="login.html" class="cuadro rol-cliente">
      <img class="cuadro-img" src="images/cliente.png" alt="Icono Cliente">
      <span class="cuadro-titulo">Cliente</span>
    </a>

    <!-- Repartidor (aún sin enlace) -->
    <a href="login2.html" class="cuadro rol-repartidor">
      <img class="cuadro-img" src="images/repartidor.png" alt="Icono Repartidor">
      <span class="cuadro-titulo">Repartidor</span>
    </a>

    <!-- Administrador (aún sin enlace) -->
    <a href="login3.html" class="cuadro rol-admin">
      <img class="cuadro-img" src="images/admin.png" alt="Icono Administrador">
      <span class="cuadro-titulo">Administrador</span>
    </a>
  </main>
</body>
</html>



