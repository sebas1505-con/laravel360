<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="images/usu.png" />
  <title>Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

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
            <li><a href="{{'welcome'}}">Inicio</a></li>
            <li><a href="{{'productos'}}">Catálogo</a></li>
            <li><a href="{{'sugerencias'}}">sugerencia</a></li>
            <li><a href="{{'login'}}">Cerrar Sesión</a></li>					
          </ul>
        </nav>

        <div class="barra-busqueda">
          <input type="text" placeholder="Buscar productos..." id="busqueda" />
          <button onclick="buscarProducto()">🔍</button>
        </div>
      </div>

      <div class="header-content">
        <div class="header-txt">
          <h1>Deportes 360</h1>
          <p>
            Descubre la mejor ropa deportiva: camisetas, sudaderas, leggings, tops y más. Comodidad, estilo y calidad al mejor precio.
          </p>
          <br />
        </div>
        <div class="header-img">
          <img src="images/deporte-portada.png" alt="Portada Deportes 360" />
        </div>				
      </div>
    </div>
  </header>

  <section class="services container">
    <h2>Nuestros Servicios</h2>
    <div class="services-content">
      <div class="services-1">
        <h3>Envíos a todo el país</h3>
        <p>
          Recibe tus prendas deportivas estés donde estés, de forma rápida y segura.
        </p>
      </div>
      <div class="services-1">
        <h3>Cambios sin complicaciones</h3>
        <p>
          ¿No te quedó bien? Te cambiamos la talla o prenda sin problemas.
        </p>
      </div>			
      <div class="services-1">
        <h3>Pagos 100% seguros</h3>
        <p>
          Compra con tranquilidad usando nuestras plataformas protegidas.
        </p>
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
        <a href="{{ ('/camiseta') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/sudadera.png" alt="Sudadera Unisex" />
        <h4>Sudadera Clásica Unisex</h4>
        <p>$120.000</p>
        <a href="{{ ('/sudadera') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/leggings.png" alt="Leggings Mujer" />
        <h4>Leggings Deportivos Mujer</h4>
        <p>$85.000</p>
        <a href="{{ ('/leggings') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/chaqueta.png" alt="Chaqueta Rompevientos" />
        <h4>Chaqueta Rompevientos</h4>
        <p>$135.000</p>
        <a href="{{ ('/chaqueta') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/short.png" alt="Short Hombre" />
        <h4>Short Deportivo Hombre</h4>
        <p>$49.000</p>
        <a href="{{ ('/short') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/top.png" alt="Top Mujer" />
        <h4>Top Deportivo Mujer</h4>
        <p>$60.000</p>
        <a href="{{ ('/producto-top') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/conjunto-mujer.png" alt="Conjunto Deportivo Mujer" />
        <h4>Conjunto Deportivo Mujer</h4>
        <p>$149.000</p>
        <a href="{{ ('/conjunto-mujer') }}" class="btn-1">Más Información</a>
      </div>

      <div class="Prodcts-1">
        <img src="images/buzo-hombre.png" alt="Buzo Deportivo Hombre" />
        <h4>Buzo Deportivo Hombre</h4>
        <p>$110.000</p>
        <a href="producto-buzo.html" class="btn-1">Más Información</a>
      </div>

    </div>
  </main>

  <footer class="footer container">
    <div class="footer-content">
      <a href="#" class="logo">Deportes 360</a>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="{{ ('/productos') }}">Catálogo</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="{{ ('/login') }}">Cerrar Sesión</a></li>
      </ul>
    </div>
  </footer>

  <script>
    function buscarProducto() {
      const termino = document.getElementById("busqueda").value.toLowerCase();

      if (termino.includes("camiseta")) {
        window.location.href = "{{'/camiseta'}}";
      } else if (termino.includes("sudadera")) {
        window.location.href = "{{'/sudadera'}}";
      } else if (termino.includes("leggings")) {
        window.location.href = "{{'/leggings'}}";
      } else if (termino.includes("chaqueta")) {
        window.location.href = "{{'/chaqueta'}}";
      } else if (termino.includes("short")) {
        window.location.href = "{{'/short'}}";
      } else if (termino.includes("top")) {
        window.location.href = "{{'/producto-top'}}";
      } else if (termino.includes("conjunto")) {
        window.location.href = "{{'/producto-conjunto-mujer'}}";
      } else if (termino.includes("buzo")) {
        window.location.href = "producto-buzo.html";
      } else {
        alert("Producto no encontrado.");
      }
    }

    document.getElementById('loginForm')?.addEventListener('submit', function(event) {
      event.preventDefault();
      window.location.href = "index.html";
    });
  </script>

</body>
</html>