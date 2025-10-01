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
    <a href="{{('/Crear-Usuario')}}" class="cuadro rol-cliente">
      <img class="cuadro-img" src="images/cliente.png" alt="Icono Cliente">
      <span class="cuadro-titulo">Cliente</span>
       <p>
        Regístrate como cliente para comprar productos, disfrutar de promociones
        y vivir la experiencia deportiva completa.
      </p>
    </a>

    <!-- Repartidor (aún sin enlace) -->
    <a href="{{('/Crear-Repartidor')}}" class="cuadro rol-repartidor">
      <img class="cuadro-img" src="images/repartidor.png" alt="Icono Repartidor">
      <span class="cuadro-titulo">Repartidor</span>
    <p>
        Únete como repartidor para trabajar con nosotros y llevar la pasión por
        el deporte a cada rincón de Colombia.
      </p>
    
    </a>    
  </main>
 <a href="{{ url('/welcome') }}" class="btn-volver-home">Volver</a>

</body>
</html>



