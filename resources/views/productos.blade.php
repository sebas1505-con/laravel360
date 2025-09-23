<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/Logo.png">
  <title>Productos - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>
  <header class="header">
    <div class="container menu">
      <a href="#" class="logo">DEPORTES 360</a>
      <nav class="navbar">
        <ul>
          <li><a href="{{ ('/usuario') }}">Inicio</a></li>
          <li><a href="{{ ('/carrito') }}">Carrito</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="Prodcts container" id="productos">
    <h2>Catálogo de Productos</h2>
    <div class="Prodcts-content">

      <div class="Prodcts-1">
        <img src="images/camiseta.png" alt="Camiseta DryFit Deportiva">
        <h4>Camiseta DryFit Deportiva</h4>
        <p>$59.900</p>
        <a href="{{ ('camiseta') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/sudadera.png" alt="Sudadera Clásica Unisex">
        <h4>Sudadera Clásica Unisex</h4>
        <p>$99.000</p>
        <a href="{{ ('sudadera') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/leggings.png" alt="Leggings Deportivos Mujer">
        <h4>Leggings Deportivos Mujer</h4>
        <p>$85.000</p>
        <a href="{{ ('leggings') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/chaqueta.png" alt="Chaqueta Rompevientos">
        <h4>Chaqueta Rompevientos</h4>
        <p>$135.000</p>
        <a href="{{ ('chaqueta') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/short.png" alt="Short Deportivo Hombre">
        <h4>Short Deportivo Hombre</h4>
        <p>$49.000</p>
        <a href="{{ ('short') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/top.png" alt="Top Deportivo Mujer">
        <h4>Top Deportivo Mujer</h4>
        <p>$60.000</p>
        <a href="{{ ('producto-top') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/conjunto-mujer.png" alt="Conjunto Deportivo Mujer">
        <h4>Conjunto Deportivo Mujer</h4>
        <p>$149.000</p>
        <a href="{{ ('producto-conjunto-mujer') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/buzo-hombre.png" alt="Buzo Deportivo Hombre">
        <h4>Buzo Deportivo Hombre</h4>
        <p>$110.000</p>
        <a href="404.html" class="btn-1">Más Información</a>
      </div>

    </div>
  </main>

  <footer class="footer">
    <div class="container footer-content">
      <a href="#" class="logo">DEPORTES 360</a>
      <ul>
        <li><a href="{{'welcome'}}">Inicio</a></li>
        <li><a href="{{ route('productos') }}">Productos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>

