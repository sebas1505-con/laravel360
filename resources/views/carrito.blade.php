<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/Carrito.png">
  <title>Carrito de Compras - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
</head>
<body>
  <header class="header">
    <div class="container menu">
      <a href="{{'/usuario'}}" class="logo">Deportes 360</a>
      <nav class="navbar">
        <ul>
          <li><a href="usuario.html">Inicio</a></li>
          <li><a href="index.html#productos">Productos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <h1>🛒 Tu Carrito de Compras</h1>

    <div id="carrito-items" class="carrito-items"></div>

    <div class="resumen-carrito">
      <h3>Total: <span id="total">$0</span></h3>
      
      <a href="formulario-compra.html" class="btn-finalizar">Finalizar compra</a>
      <a href="productos.html" class="btn-finalizar">Seguir comprando</a>
      <a href="PaginaNo.html" class="btn-finalizar">Tienes un cupón de descuento. ¡Úsalo aquí!</a>

      <button onclick="vaciarCarrito()" class="btn-finalizar" style="background-color: #e53935;">Vaciar carrito</button>
    </div>
  </main>

  <script>
    const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    const contenedor = document.getElementById("carrito-items");
    const totalSpan = document.getElementById("total");

    let total = 0;

    if (carrito.length === 0) {
      contenedor.innerHTML = "<p>Tu carrito está vacío.</p>";
    } else {
      carrito.forEach(producto => {
        total += producto.precio;

        const item = document.createElement("div");
        item.classList.add("item-carrito");
        item.innerHTML = `
          <img src="${producto.imagen}" alt="${producto.nombre}" width="120" />
          <div>
            <h4>${producto.nombre}</h4>
            <p><strong>Precio:</strong> $${producto.precio.toLocaleString()}</p>
            <p><strong>Talla:</strong> ${producto.talla ? producto.talla : "No especificada"}</p>
          </div>
        `;
        contenedor.appendChild(item);
      });

      totalSpan.textContent = `$${total.toLocaleString()}`;
    }

    function vaciarCarrito() {
      localStorage.removeItem("carrito");
      location.reload();
    }
  </script>
</body>
</html>
