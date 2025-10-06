<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="images/usu.png" />
  <title>Deportes 360 - Mis Pedidos</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>

  <header class="header">   
    <div class="container">
      <div class="menu">
        <img class="logo" src="{{ asset('images/logo-deporte.png') }}" alt="Logo Deportes 360" />
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img class="menu-icono" src="{{ asset('images/logo-deporte.png') }}" alt="Menú" />
        </label>

        <nav class="navbar">
          <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/menu') }}">Catálogo</a></li>
            <li><a href="{{ url('/quienes') }}">Quienes Somos</a></li>
            <li><a href="{{ url('/pedidos') }}" class="active">Mis Pedidos</a></li>
            <li><a href="{{ url('/login') }}">Cerrar Sesión</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="container" style="margin-top: 120px;">
    <h2>Mis Pedidos</h2>

    @if($ventas->isEmpty())
        <p>No tienes pedidos aún.</p>
    @endif

    @foreach($ventas as $venta)
        <div style="border:1px solid #ccc; padding:15px; margin:15px 0; border-radius:8px;">
            <p><strong>Pedido #{{ $venta->id }}</strong></p>
            <p><strong>Fecha:</strong> {{ $venta->Fecha_de_venta }}</p>
            <p><strong>Total:</strong> ${{ number_format($venta->totalVenta, 2) }}</p>

            <button type="button" 
                    onclick="mostrarDetalle({{ $venta->id }})"
                    style="background-color:#007bff; color:white; border:none; padding:8px 15px; border-radius:5px; cursor:pointer;">
              Ver Detalle
            </button>

            
            <div id="detalle-{{ $venta->id }}" style="display:none; margin-top:10px;">
                @if($venta->envio && $venta->envio->repartidor)
                    <p><strong>Repartidor:</strong> {{ $venta->envio->repartidor->NombreRepar }}</p>
                    <p><strong>Vehículo:</strong> {{ $venta->envio->repartidor->tipodevehi }}</p>
                    <p><strong>Placa:</strong> {{ $venta->envio->repartidor->numplaca }}</p>
                @else
                    <p>Aún no se ha asignado un repartidor.</p>
                @endif
            </div>
        </div>
    @endforeach
  </main>

  <footer class="footer container">
    <div class="footer-content">
      <a href="{{ url('/') }}" class="logo">Deportes 360</a>
      <ul>
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('/menu') }}">Catálogo</a></li>
        <li><a href="{{ url('/404') }}">Ayuda con tallas</a></li>
      </ul>
    </div>
  </footer>

  <script>
  function mostrarDetalle(id) {
      let detalle = document.getElementById("detalle-" + id);
      if (!detalle) return;
      detalle.style.display = detalle.style.display === "none" ? "block" : "none";
  }
  </script>

</body>
</html>
