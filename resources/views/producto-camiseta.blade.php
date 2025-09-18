<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/producto.png">
  <title>Camiseta DryFit Deportiva - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>
  <header class="header">
    <div class="container menu">
      <a href="#" class="logo">DEPORTES 360</a>
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
    <div class="producto-detalle">
      <div class="producto-galeria">
        <div class="imagen-principal">
          <img src="images/camiseta.png" alt="Camiseta DryFit Deportiva" id="imagen-principal">
        </div>
        <div class="miniaturas">
          <img src="images/camiseta.png" onclick="cambiarImagen('images/camiseta.png')" alt="">
          <img src="images/camiseta2.png" onclick="cambiarImagen('images/camiseta2.png')" alt="">
          <img src="images/camiseta3.png" onclick="cambiarImagen('images/camiseta3.png')" alt="">
        </div>
      </div>

      <div class="producto-info">
        <h2>Camiseta DryFit Deportiva</h2>
        <p>
          Ideal para entrenamientos o uso diario. Tecnología DryFit que mantiene tu cuerpo seco y cómodo. Disponible en varias tallas y colores.
        </p>
        <p><strong>Precio:</strong> $59.900</p>

        <ul class="caracteristicas">
          <li>👕 Tejido transpirable y ligero</li>
          <li>💧 Tecnología de secado rápido</li>
          <li>📏 Tallas: S, M, L, XL</li>
          <li>🎨 Colores disponibles: negro, blanco, azul</li>
          <li>🛡️ Garantía: 30 días por defectos de fábrica</li>
        </ul>

        <div class="benefits-mini">
          <span>🚚 Envío gratis</span>
          <span>💳 Pago contra entrega</span>
          <span>🛡️ Garantía oficial</span>
        </div>

<label for="talla"><strong>Selecciona tu talla:</strong></label>
<select id="talla" name="talla" style="display: block; margin: 10px 0;">
  <option value="">-- Selecciona --</option>
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
</select>

<div style="margin: 10px 0;">
  <strong>Calificación:</strong><br />
  <img src="images/estrellas.png" alt="5 estrellas" style="width: 120px;" />
</div>



        <div style="margin-top: 20px;">
          <a href="index.html" class="btn-1">Volver</a>
          <button class="btn-1" style="margin-left: 10px;" onclick="agregarAlCarrito()">Comprar</button>
        </div>
      </div>
    </div>

    <section class="relacionados">
      <h3>También te puede interesar</h3>
      <div class="relacionados-grid">
        <div class="relacionado">
          <img src="images/sudadera.png" alt="Sudadera Unisex">
          <p>Sudadera Clásica Unisex</p>
          <span>$120.000</span>
        </div>
        <div class="relacionado">
          <img src="images/leggings.png" alt="Leggings Mujer">
          <p>Leggings Deportivos Mujer</p>
          <span>$85.000</span>
        </div>
      </div>
    </section>
  </main>

  <script>
  function agregarAlCarrito() {
    const tallaSeleccionada = document.getElementById("talla").value;

    if (!tallaSeleccionada) {
      alert("Por favor selecciona una talla.");
      return;
    }

    const producto = {
      nombre: "Camiseta DryFit Deportiva",
      precio: 59900,
      talla: tallaSeleccionada,
      imagen: "images/camiseta.png"
    };

    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.push(producto);
    localStorage.setItem("carrito", JSON.stringify(carrito));

    window.location.href = "carrito.html";
  }
</script>


  
</body>
</html>
