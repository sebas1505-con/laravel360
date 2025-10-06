<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="images/usu.png" />
  <title>Deportes 360</title>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>

@if(session('success'))
  <script>
      alert('{{ session('success') }}');
  </script>
@endif

  
<div style="display:none;">
    <h2>Mis Pedidos</h2>

    @if($ventas->isEmpty())
        <p>No tienes pedidos aún.</p>
    @endif

    @foreach($ventas as $venta)
        <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
            <p><strong>Pedido #{{ $venta->id }}</strong></p>
            <p><strong>Fecha:</strong> {{ $venta->Fecha_de_venta }}</p>
            <p><strong>Total:</strong> ${{ $venta->totalVenta }}</p>

            <button type="button" onclick="mostrarDetalle({{ $venta->id }})">Ver Detalle</button>

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
</div>

<script>
function mostrarDetalle(id) {
    let detalle = document.getElementById("detalle-" + id);
    if (!detalle) return;
    detalle.style.display = detalle.style.display === "none" ? "block" : "none";
}
</script>

  <header class="header">   
    <div class="container">
      <div class="menu">
        <img class="logo" src="images/logo-deporte.png" alt="Logo Deportes 360" />
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img class="menu-icono" src="images/logo-deporte.png" alt="Menú" />
        </label>
        <nav class="navbar">
          <ul>
            <li><a href="{{'/'}}">Inicio</a></li>
            <li><a href="{{'/menu'}}">Catálogo</a></li>
            <li><a href="{{'/quienes'}}">Quienes somos</a></li>
            <li><a href="{{'/pedidos'}}">Mis Pedidos</a></li>
            <li><a href="{{'/login'}}">cerrar Sesión</a></li>
          
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="hero-section">
    <div class="container hero-content">
        <div class="hero-text">
            <h1>CELEBRA CADA MOVIMIENTO</h1>
            <p>TECNOLOGÍA, COMODIDAD Y ESTILO PARA CADA DÍA.</p>
            <a href="{{'/login'}}" class="btn-2">Compra Ya</a>
        </div>
        <div class="hero-image">
             <img src="images/atleta-hero.png" alt="Atleta saltando" />
        </div>
    </div>
  </div>

  <section class="services">
    <div class="container">
      <h2>Nuestros Servicios</h2>
      <div class="services-content">
        <div class="services-1">
          <h3>Envíos a todo el país</h3>
          <p>Recibe tus prendas deportivas estés donde estés, de forma rápida y segura.</p>
        </div>
        <div class="services-1">
          <h3>Cambios sin complicaciones</h3>
          <p>¿No te quedó bien? Te cambiamos la talla o prenda sin problemas.</p>
        </div>      
        <div class="services-1">
          <h3>Pagos 100% seguros</h3>
          <p>Compra con tranquilidad usando nuestras plataformas protegidas.</p>
        </div>
      </div>
    </div>
  </section>

  <main class="Prodcts container">
    <h2>Prendas Destacadas</h2>
    
    <div class="Prodcts-content">
      <div class="Prodcts-1">
        <img src="images/camiseta.png" alt="Camiseta DryFit" />
        <h4>Camiseta DryFit Deportiva</h4>
        <p>$59.900</p>
        <a href="{{'/camiseta'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/sudadera.png" alt="Sudadera Unisex" />
        <h4>Sudadera Clásica Unisex</h4>
        <p>$120.000</p>
        <a href="{{'/sudadera'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/leggings.png" alt="Leggings Mujer" />
        <h4>Leggings Deportivos Mujer</h4>
        <p>$85.000</p>
        <a href="{{'/leggings'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/chaqueta.png" alt="Chaqueta Rompevientos" />
        <h4>Chaqueta Rompevientos</h4>
        <p>$135.000</p>
        <a href="{{'/chaqueta'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/short.png" alt="Short Hombre" />
        <h4>Short Deportivo Hombre</h4>
        <p>$49.000</p>
        <a href="{{'/short'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/top.png" alt="Top Mujer" />
        <h4>Top Deportivo Mujer</h4>
        <p>$60.000</p>
        <a href="{{'/producto-top'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/conjunto-mujer.png" alt="Conjunto Deportivo Mujer" />
        <h4>Conjunto Deportivo Mujer</h4>
        <p>$149.000</p>
        <a href="{{'/conjunto-mujer'}}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/buzo-hombre.png" alt="Buzo Deportivo Hombre" />
        <h4>Buzo Deportivo Hombre</h4>
        <p>$110.000</p>
        <a href="{{'/login'}}" class="btn-1">Más Información</a>
      </div>
    </div>
  </main>

  <footer class="footer container">
    <div class="footer-content">
      <a href="index.php" class="logo">Deportes 360</a>
      <ul>
        <li><a href="{{'/login'}}">Inicio</a></li>
        <li><a href="{{'/login'}}">Catálogo</a></li>
        <li><a href="{{'/404'}}">Ayuda con tallas</a></li>
      </ul>
    </div>
  </footer>

<script>
function mostrarDetalle(id) {
    console.log("Mostrar detalle de venta:", id); // Verifica que se está llamando
    let detalle = document.getElementById("detalle-" + id);
    if (!detalle) {
        console.log("No se encontró el div:", "detalle-" + id);
        return;
    }
    // Alternar entre oculto y visible
    detalle.style.display = detalle.style.display === "none" ? "block" : "none";
}
</script>


</body>
</html>